<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use Session;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function home()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }

        return view('manager',compact('data'));
    }

    public function index()
    {
        return view('login');

    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','Registered Successfully');
        }else{
            return back()->with('fail','Try Again.');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);
        $user = User::where('user_email','=',$request->email)->first();
        if($user){
            if(hash::check($request->password,$user->user_password)){
                $request->session()->put('loginId',$user->user_id);
                return redirect('home');
            }
            else{
                return back()->with('fail','Password Incorrect.');
            }
        }else{
            return back()->with('fail','Email not Registered.');
        }
    }

 
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
