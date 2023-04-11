<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Manager;
use AdminController;
use App\Models\Employee;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hash;
use Laravel\Sanctum\HasApiTokens;
use JWTAuth;
use Session;
use Tymon\JWTAuth\Exceptions\JWTException;
use Mail;
use App\Mail\PasswordReset;
use App\Models\Announcement;

class AuthController extends Controller
{

    
    public function login()
    {
        return view('login');
    }
    public function map()
    {
        return view('map');
    }
    public function updatepass()
    {
        return view('updatepass');
    }

    public function landing(){
        return view('welcome');
    }
    public function registration(){
        return view("registration");
    }


    public function dashboard(){
        $announcements = Announcement::all();
        return view ('dashboard')->with('announcements', $announcements);
    }
    public function registerUser(Request $request){
        $request->validate([
            'admin_fname'=>'required',
            'admin_lname'=>'required',
            'admin_username'=>'required',
            'admin_email'=>'required|email|unique:admin',
            'admin_password'=>'required|min:6|max:12',
        ]);
        $admin = new Admin();
        $admin->admin_fname = $request->admin_fname;
        $admin->admin_lname = $request->admin_lname;
        $admin->admin_email = $request->admin_email;
        $admin->admin_username = $request->admin_username;
        $admin->admin_password = Hash::make($request->admin_password);
        $res = $admin->save();
        if($res){
            // return back()->with('success','Registered Successfully');
            
            // Admin::create($res);
            // return redirect('admin')->with('flash_message', 'Admin Addedd!'); 
            $request->session()->put('loginId',$admin->admin_id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','Try Again.');
        }
    }

    // gana logic dinhi sa login
    public function loginManager(Request $request){
        
        // $request->validate([
        //     'email'=>'required',
        //     'password'=>'required|min:6|max:12',
        // ]);
        // $manager = Manager::where('man_email','=',$request->email)->first();
       
        // if($manager){
        //     if($request->password==$manager->man_password){
        //         $request->session()->put('loginId',$manager->man_id);
        //         return redirect('employee');
        //     }
        //     else{
        //         return back()->with('fail','Password Incorrect.');
        //     }
        // }else{
        //     return back()->with('fail','Email not Registered.');
        // }
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json(['token' => $token], 200);
        }
    
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    public function updateUser(Request $request){
      // Validate the form data
      $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required|same:new_password',
    ]);

    // Get the authenticated user
    $user = User::where('user_password', $request->current_password)->first();
    // Verify the user's current password
        if (!Hash::check($request->input('current_password'), $user->user_password)) {
            $user->user_password = Hash::make($request->input('new_password'));
            $user->save();
        }
        else{
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

    // Update the user's password
    

    // Redirect the user to the profile page with a success message
    return redirect('dashboard')->with('success', 'Your password has been updated.');
    }
    public function loginWeb(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);
        $admin = Admin::where('admin_email','=',$request->email)->first();
        if($admin){
            if(hash::check($request->password,$admin->admin_password)){
   
                $request->session()->put('loginId',$admin->admin_id);
                return redirect('dashboard');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }
        $user = User::where('user_email','=',$request->email)->first();
        if($user){
            if($user->role == 1){
                if($user->user_password==$request->password){

                    
                    $request->session()->put('loginId',$user->user_id);
                    return redirect('updatepass');
                        
                    
                // echo "Hello world!<br>";
                }
                else if ($user && Hash::check($request->password, $user->user_password)){
                    $request->session()->put('loginId',$user->user_id);
                    return redirect('dashboard');
                            
                            
                }
                else{
                    return back()->with('fail','Password Incorrect.');
                }
            }
            else{
                return back()->with('fail','You can only login this credentials on our Mobile App.');
            }
        }
        
        else{
            return back()->with('fail','Email not Registered.');
        }
   
    }


    public function logoutEmployee(Request $request)
    {
        if(!Employee::checkToken($request)){
            return response()->json([
             'message' => 'Token is required',
             'success' => false,
            ],422);
        }
        
        try {
            JWTAuth::invalidate(JWTAuth::parseToken($request->token));
            return response()->json([
                'success' => true,
                'message' => 'Employee logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the employee cannot be logged out'
            ], 500);
        }
    }

    public function getCurrentEmployee(Request $request){
       if(!Employee::checkToken($request)){
           return response()->json([
            'message' => 'Token is required'
           ],422);
       }
        
        $employee = JWTAuth::parseToken()->authenticate();
       // add isProfileUpdated....
       $isProfileUpdated=false;
        if($employee->isPicUpdated==1 && $employee->isEmailUpdated){
            $isProfileUpdated=true;
            
        }
        $employee->isProfileUpdated=$isProfileUpdated;

        return $employee;
}

public function loginEmployee(Request $req){
        
    // validate inputs
      $rules = [
          'email' => 'required',
          'password' => 'required'
      ];
      $req->validate($rules);
      // find user email in users table
      $user = User::where('user_email', $req->email)->first();
      // if user email found and password is correct
      
       //first if condition kay: IF HASHED PASSWORD IS EQUAL TO REQUEST PASS
      // THEN DASHBOARD PAGE, RETURN 200. ELSE IF REQ PASS EQUAL TO NOT HASHED PASS THEN UPDATE PASS, RETURN 201
      if($user){
        
        if($user->role != '2'){
            
            $response = ['message' => 'Your account is restricted in the Mobile App. You only have desktop access of the app.'];
                  return response()->json($response, 400);
        }
          else { 
            if ($user->user_password == $req->password) {
                $req->session()->regenerate();
                 //$user = auth()->user();
                //$user = Auth::user();
                //$req->session()->regenerate();
                $token = $req->session()->token();
                $response = ['users' => $user, 'token' => $token];
                //$req->session()->regenerate();
              //$response = ['message' => 'Success'];
            //   $user = Auth::user();
            //   $user = auth()->user();
            session(['users'=>$user]);
               return response()->json($response, 201);
               
              
          }
          else if ($user && Hash::check($req->password, $user->user_password)){
            $req->session()->regenerate();
            
                  //$token = $user->createToken('Personal Access Token')->plainTextToken;
                  //$token = $req->session()->token();
                  //$response = ['users' => $user, 'token' => $token];
                  //$response = ['users'=>$user,'message' => 'Success'];
                  $response = ['users'=>$user,'token'=>$req->session()->token(), 'status'=>true,
                  'message' => 'Success'];

                  return response()->json($response, 200);
              
              
          }
        
        
          else{
              $response = ['message' => 'Incorrect credentials'];
      return response()->json($response, 400);
          }
        }
      }
      else{
      $response = ['message' => 'Incorrect credentials'];
      return response()->json($response, 400);
      }
   
  }
  public function updateEmployeePass(Request $req)
  {
      //valdiate
      $rules = [
          'oldPass' => 'required|string',
          'newPass' => 'required|string',
          'confirmPass' => 'required|string|same:newPass'
      ];

      $validator = Validator::make($req->all(), $rules);
      if($validator->fails()){
        return response()->json([
            'message'=>'Validation Fails',
            'errors'=>$validator->errors()
        ],400);
      }
      // $tempUser = auth()->user();
      
      //create new user in users table
      $user = User::where('user_password','=',$req->oldPass)->first();
       //$user = auth()->user();
     //$user = Auth::user();
     //$user = User::where(auth()->user());
     //$user = session('user');
      if($user){
          if ($req->oldPass==$user->user_password) {
              if($req->newPass == $req->confirmPass){
              
                  $req->confirmPass=Hash::make($req->confirmPass);
                  //$user = User::where('user_password', $req->oldPass)->update(['user_password'=>$req->confirmPass]);
                  
                  $response = ['users'=>$user,'token'=>$req->session()->token(), 'status'=>true,
                  'message' => 'Success'];

                  return response()->json($response, 200);
              }
              else{
                  $response = ['message' => 'Confirm Password does not match!'];
                  return response()->json($response, 400);
              }
          }
          else{
              $response = ['message' => 'Old Password does not match!'];
              return response()->json($response, 400);
          }
      }
      else{
          $response = ['message' => 'Old Password does not match!'];
          return response()->json($response, 400);
      }
  }
    
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
        }
        return redirect('/');
    }
}