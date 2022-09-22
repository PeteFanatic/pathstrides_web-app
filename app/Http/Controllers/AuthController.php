<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hash;
use Laravel\Sanctum\HasApiTokens;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Mail;
use App\Mail\PasswordReset;

class AuthController extends Controller
{

    public function login_manager()
    {
        return view('managers.login');
    }
    public function login()
    {
        return view('login');
    }

    public function landing(){
        return view('welcome');
    }
    public function registration(){
        return view("registration");
    }

    public function dashboard_manager(){
        return view('dashboard_manager');
    }
    // public function dashboard_admin(){
    //     // return view('dashboard_manager');
    //     $manager = array();
    //     // if(Session::has('loginId')){
    //     //     $manager = Manager::where('id','=',Session::get('loginId'))->first();
    //     // }
    //     return view("dashboard_admin");
    // }


    // public function register(Request $req)
    // {
    //     //valdiate
    //     $rules = [
    //         'name' => 'required|string',
    //         'email' => 'required|string|unique:users',
    //         'password' => 'required|string|min:6|max:15'
    //     ];
    //     $validator = Validator::make($req->all(), $rules);
    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 400);
    //     }
    //     //create new user in users table
    //     $admin = Admin::create([
    //         'admin_fname' => $req->fname,
    //         'admin_lname' => $req->lname,
    //         'admin_email' => $req->email,
    //         'admin_username' => $req->username,
    //         'admin_password' => Hash::make($req->password)
    //     ]);
    //     $token = $admin->createToken('Personal Access Token')->plainTextToken;
    //     $response = ['admin' => $admin, 'token' => $token];
    //     return response()->json($response, 200);
    // }
    public function registerUser(Request $request){
        $request->validate([
            'admin_fname'=>'required',
            'admin_lname'=>'required',
            'admin_username'=>'required',
            'admin_email'=>'required|email|unique:users',
            'admin_password'=>'required|min:6|max:12',
        ]);
        $admin = new Admin();
        $admin->lname = $request->lname;
        $admin->fname = $request->fname;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $res = $admin->save();
        if($res){
            // return back()->with('success','Registered Successfully');
            
            Admin::create($res);
            return redirect('admin')->with('flash_message', 'Admin Addedd!'); 
        }else{
            return back()->with('fail','Try Again.');
        }
    }

    // public function login(Request $req)
    // {
    //     // validate inputs
    //     $rules = [
    //         'email' => 'required',
    //         'password' => 'required|string'
    //     ];
    //     $req->validate($rules);
    //     // find user email in users table
    //     $employee = Employee::where('emp_email', $req->email)->first();
    //     // if user email found and password is correct
    //     if($employee){
    //         if ($employee = Employee::where('emp_password','=',$req->password)->first()) {
    //             // $token = $employee->createToken('Personal Access Token')->plainTextToken;
    //             // $response = ['employee' => $employee, 'token' => $token];
    //             $response = ['message' => 'Success'];
    //             return response()->json($response, 200);
    //         }
    //         else{
    //             $response = ['message' => 'Incorrect password'];
    //     return response()->json($response, 400);
    //         }
        
    //     }
    //     else{
    //     $response = ['message' => 'Incorrect email'];
    //     return response()->json($response, 400);
    //     }
    // }
    // gana logic dinhi sa login
    public function loginManager(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);
        $manager = Manager::where('man_email','=',$request->email)->first();
       
        if($manager){
            if($request->password==$manager->man_password){
                // if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$manager->man_id);
                return redirect('employee');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else{
            return back()->with('fail','Email not Registered.');
        }
    }
    public function loginWeb(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);
        $admin = Admin::where('admin_email','=',$request->email)->first();
         $manager = Manager::where('man_email','=',$request->email)->first();
        // $manager = Manager::where('man_password','=',Hash::make($request->password))->first();
        if($admin){
            if($request->password==$admin->admin_password){
            //     if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(hash::check($request->password,$manager->man_password)){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$admin->admin_id);
                return redirect('dashboard');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else if($manager){
            if($request->password==$manager->man_password){
            //     if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(hash::check($request->password,$manager->man_password)){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$manager->man_id);
                return redirect('dashboard');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else{
            return back()->with('fail','Email not Registered.');
        }
        // else{
        //     return back()->with('fail','Email not Registered.');
        // }
    }

    // public function login(Request $request)
    // {
        
    //     $input = $request->only('email', 'password');
    //     $jwt_token = null;
    //     if (!$jwt_token = JWTAuth::attempt($input)) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Invalid Email or Password',
    //         ], 401);
    //     }
    //     // get the user 
    //     $employee = Auth::employee();
       
    //     return response()->json([
    //         'success' => true,
    //         'token' => $jwt_token,
    //         'employee' => $employee
    //     ]);
    // }
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

   
// public function update(Request $request){
//     $employee=$this->getCurrentEmployee($request);
//     if(!$employee){
//         return response()->json([
//             'success' => false,
//             'message' => 'Employee is not found'
//         ]);
//     }
   
//     unset($data['token']);

//     $updatedEmployee = Employee::where('id', $employee->id)->update($data);
//     $employee =  Employee::find($employee->id);

//     return response()->json([
//         'success' => true, 
//         'message' => 'Information has been updated successfully!',
//         'employee' =>$employee
//     ]);
// }
    public function loginEmployee(Request $req){
        
      // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find user email in users table
        $employee = Employee::where('emp_email', $req->email)->first();
        // if user email found and password is correct
        
         //first if condition kay: IF HASHED PASSWORD IS EQUAL TO REQUEST PASS
        // THEN DASHBOARD PAGE, RETURN 200. ELSE IF REQ PASS EQUAL TO NOT HASHED PASS THEN UPDATE PASS, RETURN 201
        if($employee){
            if ($employee = Employee::where('emp_password','=',$req->password)->first()) {
                // if ($employee = Employee::where('emp_password')==$req->password) {
                $token = $employee->createToken('Personal Access Token')->plainTextToken;
                $response = ['employee' => $employee, 'token' => $token];
                $response = ['message' => 'Success'];
                // return response()->json([
                //             'success' => true,
                //             'token' => $jwt_token,
                //             'employee' => $employee,
                           
                //         ]);
                $auth_id = $emp_id;
                 return response()->json($response, 201);
            }
            else if ($employee && Hash::check($req->password, $employee->emp_password)){
                $token = $employee->createToken('Personal Access Token')->plainTextToken;
                $response = ['employee' => $employee, 'token' => $token];
                $response = ['message' => 'Success'];

                return response()->json($response, 200);
            }
            else{
                $response = ['message' => 'Incorrect password'];
        return response()->json($response, 400);
            }
        
        }
        else{
        $response = ['message' => 'Incorrect email'];
        return response()->json($response, 400);
        }
        // $input = $request->only('email', 'password');
        //     $jwt_token = null;
        //     if (!$jwt_token = JWTAuth::attempt($input)) {
        //         return response()->json([
        //             'success' => false,
        //             'message' => 'Invalid Email or Password',
        //         ], 401);
        //     }
        //     // get the user 
        //     $employee = Auth::employee();
           
        //     return response()->json([
        //         'success' => true,
        //         'token' => $jwt_token,
        //         'employee' => $employee
        //     ],200);
    }
    public function update_employeePass(Request $req)
    {
        //valdiate
        $rules = [
            'password' => 'required|string',
            'new_password' => 'required|string|unique:users',
            'confirm_password' => 'required|string|min:6|max:15'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        if ($req->password==$employee->emp_password) {
            if($req->new_password == $req->confirm_password){
                $employee = Employee::update([
                'password' => Hash::make($req->confirm_password)
                ]);
                $token = $employee->createToken('Personal Access Token')->plainTextToken;
        $response = ['employee' => $employee, 'token' => $token];
        return response()->json($response, 200);
            }
            else{
                return response()->json($response, 400);
            }
        }
        else{
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