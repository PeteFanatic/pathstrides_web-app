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

    public function login_manager()
    {
        return view('login_manager');
    }
    public function login_admin()
    {
        return view('login_admin');
    }


    public function landing(){
        return view('welcome');
    }
    public function registration(){
        return view("admin.registration");
    }

    public function dashboard_manager(){
        // return view('dashboard_manager');
        $manager = array();
        // if(Session::has('loginId')){
        //     $manager = Manager::where('id','=',Session::get('loginId'))->first();
        // }
        return view("dashboard_manager");
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
        $admin->admin_fname = $request->admin_fname;
        $admin->admin_lname = $request->admin_lname;
        $admin->admin_username = $request->admin_username;
        $admin->admin_email = $request->admin_email;
        $admin->admin_password = $request->admin_password;
        $res = $admin->save();
        if($res){
            // return back()->with('success','Registered Successfully');
            
            // Admin::create($request);
            $request->session()->put('loginId',$admin->admin_id);
            // return redirect('manager');
            return back()->with('success','Registered Successfully');
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
        // $manager = Manager::where('man_password','=',Hash::make($request->password))->first();
        if($manager){
            if($request->password==$manager->man_password){
            //     if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(hash::check($request->password,$manager->man_password)){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$manager->man_id);
                return redirect('employees');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else{
            return back()->with('fail','Email not Registered.');
        }
    }
    public function loginAdmin(Request $request){
        
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);
        $admin = Admin::where('admin_email','=',$request->email)->first();
        // $manager = Manager::where('man_password','=',Hash::make($request->password))->first();
        if($admin){
            if($request->password==$admin->admin_password){
            //     if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(hash::check($request->password,$manager->man_password)){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$admin->admin_id);
                return redirect('manager');
                // echo "Hello world!<br>";
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else{
            return back()->with('fail','Email not Registered.');
        }
    }
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
        if($employee){
            if ($req->password==$employee->emp_password) {
            //     $token = $employee->createToken('Personal Access Token')->plainTextToken;
            // $response = ['employee' => $employee, 'token' => $token];
                // if ($employee = Employee::where('emp_password')==$req->password) {
                // $token = $employee->createToken('Personal Access Token')->plainTextToken;
                // $response = ['employee' => $employee, 'token' => $token];
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
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
        }
        return redirect('/');
    }
}