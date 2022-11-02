<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Schema\Blueprint;
use Laravel\Sanctum\HasApiTokens;
class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function landing(){
        return view('welcome');
    }
    public function registration(){
        return view("admin.registration");
    }

    public function dashboard(){
        // return view('dashboard_manager');
        $manager = array();
        // if(Session::has('loginId')){
        //     $manager = Manager::where('id','=',Session::get('loginId'))->first();
        // }
        return view("dashboard");
    }
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
            'admin_email'=>'required|email|unique:admin',
            'admin_password'=>'required|min:6|max:12',
        ]);
        $admin = new Admin();
        // $admin->admin_id = $admin->id();
        $admin->admin_fname = $request->admin_fname;
        $admin->admin_lname = $request->admin_lname;
        $admin->admin_username = $request->admin_username;
        $admin->admin_email = $request->admin_email;
        $admin->admin_password = Hash::make($request->admin_password);

        $res = $admin->save();
        if($res){
            // return back()->with('success','Registered Successfully');
            
            // Admin::create($request);
            $request->session()->put('loginId',$admin->admin_id);
            return redirect('dashboard');
            // return back()->with('success','Registered Successfully');
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
    public function loginWeb(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);
        $admin = Admin::where('admin_email','=',$request->email)->first();
        // $manager = Manager::where('man_password','=',Hash::make($request->password))->first();
        if($admin){
            if(hash::check($request->password,$admin->admin_password)){
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
        }
        $user = User::where('user_email','=',$request->email)->first();
        if($user){
            if($request->password==$user->user_password){
            //     if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(hash::check($request->password,$manager->man_password)){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$users->user_id);
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

    public function loginEmployee(Request $req){
        
      // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find user email in users table
        $user = User::where('user_email', $req->email)->first();
        // if user email found and password is correct
        if($user){
            if ($req->password==$user->user_password) {
                if($user->role == 2){
                 $token = $user->createToken('Personal Access Token')->plainTextToken;
             $response = ['user' => $user, 'token' => $token];
                // if ($employee = Employee::where('emp_password')==$req->password) {
                     if($user->role == '2'){
                  $token = $user->createToken('Personal Access Token')->plainTextToken;
                  $response = ['users' => $user, 'token' => $token];
                  $user = auth()->user();
                  $user = Auth::user();
                $response = ['message' => 'Success'];
                return response()->json($response, 200);
                }
                else{
                    $response = ['message' => 'Your account is only accessible in our website.'];
                return response()->json($response, 400);
                }
            }
            else if ($user && Hash::check($req->password, $user->user_password)){
                // $user = auth()->user();
                // $user = Auth::user();
                if($user->role == '2'){
                    $token = $user->createToken('Personal Access Token')->plainTextToken;
                    // $request->session()->put('loginId',$user->user_id);
                    $response = ['users' => $user, 'token' => $token];
                    $response = ['message' => 'Success'];

                    return response()->json($response, 200);
                }
                else{
                    $response = ['message' => 'Your account is restricted in the Mobile App. You only have desktop access of the app.'];
                    return response()->json($response, 400);
                }
            }
            else{
                $response = ['message' => 'Incorrect credentials'];
        return response()->json($response, 400);
            }
        
        }
        else{
        $response = ['message' => 'Incorrect credentials'];
        return response()->json($response, 400);
    }
    public function updateEmployeePass(Request $req)
    {
        //valdiate
        $rules = [
            'oldPass' => 'required|string',
            'newPass' => 'required|string|min:6',
            'confirmPass' => 'required|string|min:6'
        ];

        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        // $tempUser = auth()->user();
        
        //create new user in users table
        $user = User::where('user_password','=',$req->oldPass)->first();
        if($user){
            if ($req->oldPass==$user->user_password) {
                if($req->newPass == $req->confirmPass){
                    // $user = User::where(
                    // 'user_password',$req->confirmPass
                    // )->update(['user_password'=>$req_confirmPass]);

                    // $user=User::find($req->oldPass)->update(['user_password'=>$req->confirmPass]);
                    
                    //$user = User::where('user_password', $req->oldPass)->update(['user_password'=>$req->confirmPass]);
                    $req->confirmPass=Hash::make($req->confirmPass);
                    $user = User::where('user_password', $req->oldPass)->update(['user_password'=>$req->confirmPass]);
                    // product::find($id)->update([ 'key' => $request['key'],'name' => $request['name']);
                    
                    $response = ['message' => 'Success'];
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
            return redirect('login');
        }
    }
}