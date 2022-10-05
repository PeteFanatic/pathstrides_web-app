<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Department;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //  $managers = Manager::all();
        //  return view ('managers.index')->with('managers', $managers);
        if(Session::has('loginId')){
            $data = User::where('user_id','=',Session::get('loginId'))->first();
        $managers=User::where('role','=','1');
        return view ('managers.index')->with('managers', $managers);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=Department::getDepartment(1);
        return view ('managers.create')->with('department', $department);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'man_id'=>'required|regex:/[0-9]+/|unique:manager,man_id',
            'man_fname'=>'required',
            'man_lname'=>'required',
            'man_email'=>'required',
            'man_contanct_num'=>'required|regex:/[0-9]+/|min:11|unique:manager,man_contanct_num',
            'man_username'=>'required',
            'man_password'=>'required|min:6',
            'dep_id'=>'unique:departments,dep_id',
        ];

        $messages=[
            'man_id.required'=>'Please supply a ID number',
            'man_id.regex'=>'Manager ID is only numeric',
            'man_id.unique'=>'Manager ID already exist',
            'man_fname.required' => 'The First Name should not be empty.',
            'man_lname.required' => 'The Last Name should not be empty.',
            'man_contanct_num.required' => 'Contanct Number should not be empty.',
            'man_contanct_num.regex' => 'Contanct Number should be numeric.',
            'man_contanct_num.unique' => 'Contanct Number already exist.',
            'man_contanct_num.min' => 'Contanct Number should have 11 characters.',
            'man_username.required' => 'Username should not be empty.',
            'man_password.required' => 'Password should not be empty.',
            'man_password.min' => 'Password should have 6 characters.',

        ];

        // $validation = Validator::make($request->input(),$rules,$messages);

        // if($validation->fails()){    //$validation->passes()
        //     return redirect()->back()->withInput()->withErrors($validation); 
        // } else {

        //  $managers=new Manager;

        //  $managers->create([
        //     'man_id'=>$request->man_id, 
        //     'man_fname'=>$request->man_fname, 
        //     'man_lname'=>$request->man_lname, 
        //     'man_email'=>$request->man_email, 
        //     'man_contanct_num'=>$request->man_contanct_num, 
        //     'man_coll'=>$request->man_coll, 
        //     'man_username'=>$request->man_username, 
        //     'man_password'=>$request->man_password, 
        //     'admin_id'=>$request->admin_id, 
        //     'dep_id'=>$request->dep_id
        //  ]);

        //  return view ('manager')->with('managers', $managers);

     

        //  }

            $input = $request->all();
        Manager::create($input);
        return redirect('manager')->with('flash_message', 'Manager Addedd!'); 

      
       

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manager = Manager::find($id);
        return view('managers.show')->with('managers', $manager);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $managers = Manager::find($id);
        $department=Department::getDepartment(1);
        return view('managers.edit')->with(compact('managers', 'department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department=Department::getDepartment(1);
        $manager = Manager::find($id);
        $input = $request->all();
        $manager->update($input);
        return redirect('manager')->with('flash_message', 'manager Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manager::destroy($id);
        return redirect('manager')->with('flash_message', 'manager deleted!');
    }
}

