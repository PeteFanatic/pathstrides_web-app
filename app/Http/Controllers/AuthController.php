<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function welcome(){
        return view('welcome');
    }
    
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6|max:15'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find user email in users table
        $user = User::where('email', $req->email)->first();
        // if user email found and password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user' => $user, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect email or password'];
        return response()->json($response, 400);
    }
    // gana logic dinhi sa login
    public function loginUser(Request $request){
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);
        $manager = Manager::where('man_email','=',$request->email)->first();
        if($manager){
            // if(Hash::check($request->password, $manager->man_password)){
                if($manager = Manager::where('man_password','=',$request->password)->first()){
                // if(manager->where($request->password)->value('man_password')){
                $request->session()->put('loginId',$manager->man_id);
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
}