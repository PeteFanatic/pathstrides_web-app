<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Controllers\Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Employee;
use App\Controllers\AuthController;

class TaskController extends Controller
{
    public $flash_message;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = task::all();
        return view ('tasks.index')->with('tasks', $tasks)->with('flash_message', $this->flash_message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee=User::getemployee(1);
        return view('tasks.create')->with('employee',$employee);
        User::all()->notify(new AddedTask($task));
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
        Task::create($input);
        $this->flash_message = 'Task Added!';
        //dd($this->flash_message);
        $request->session()->flash('flash_message', 'Task added!');//This for Announcement
        return redirect('task');//->with('flash_message', 'Announcement added!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('tasks', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $employee=User::getemployee(1);
        
        return view('tasks.edit')->with('employee',$employee);
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
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task')->with('flash_message', 'task Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');
    }

    public function getemployeeTask(){
        if($auth_id == $emp_id){
            $list = new Task();
            $list = $list->getemployeeTask();
            return response()->json($list);
            // }
    }
}
}