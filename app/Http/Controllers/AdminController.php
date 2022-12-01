<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Department;
use App\Models\Admin;
class AdminController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $employee = User::all();
       return view ('admin.index')->with('employee', $employee);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $department=Department::getDepartment(1);
    return view ('admin.create')->with('department', $department);

   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $input = $request->all();
       User::create($input);
       return redirect('admin')->with('flash_message', 'employee Addedd!'); 
    
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $employee = User::find($id);
       return view('admin.show')->with('employee', $employee);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $employee = User::find($id);
       $department=Department::getDepartment(1);
       return view('admin.edit')->with(compact('employee', 'department'));
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
       $employee = User::find($id);
       $input = $request->all();
       $employee->update($input);
       return redirect('admin')->with('flash_message', 'employee Updated!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       User::destroy($id);
       return redirect('admin')->with('flash_message', 'employee deleted!');
   }

   public function getUser(){
    $user = auth()->user();
    $list = new User();
    return response()->json($list);
}
}
