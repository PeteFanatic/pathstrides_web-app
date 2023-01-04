<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskReport;
class TaskReportController extends Controller
{
    public function index()
    {
        $taskreport = TaskReport::all();
        return view ('taskreport.index')->with('taskreport', $taskreport);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $department=Department::getDepartment(1);
     return view ('taskreport.create')->with('department', $department);
 
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
        TaskReport::create($input);
        return redirect('taskreport')->with('flash_message', 'taskreport Addedd!'); 
     
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taskreport = TaskReport::find($id);
        return view('taskreport.show')->with('taskreport', $taskreport);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taskreport = TaskReport::find($id);
        $department=Department::getDepartment(1);
        return view('taskreport.edit')->with(compact('taskreport', 'department'));
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
        $taskreport = TaskReport::find($id);
        $input = $request->all();
        $taskreport->update($input);
        return redirect('taskreport')->with('flash_message', 'taskreport Updated!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TaskReport::destroy($id);
        return redirect('taskreport')->with('flash_message', 'taskreport deleted!');
    }

    public function uploadImage(Request $request){
        $dir="test/";
        $image = $request->file('image');
     
       if ($request->has('image')) {
               $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid() . "." . "png";
               if (!Storage::disk('public')->exists($dir)) {
                   Storage::disk('public')->makeDirectory($dir);
               }
               Storage::disk('public')->put($dir.$imageName, file_get_contents($image));
       }else{
            return response()->json(['message' => trans('/storage/test/'.'def.png')], 200);
       } 

       $userDetails = [
       
           'image' => $imageName,
        
       ];

      // User::where(['id' => 27])->update($userDetails);

       return response()->json(['message' => trans('/storage/test/'.$imageName)], 200);
        // $image = $_FILES['image']['name'];
        // $name = $_POST['name'];

        // $imagePath = 'upload/'.$image;
        // $tmp_name = $_FILES['image']['tmp_name'];

        // move_uploaded_file($tmp_name,$imagePath);

        // $taskreport->query("INSERT INTO pathstrides.task_report(name,image)VALUES('".$name."','".$image."')");

        // if($request){
        //     echo json_encode([
        //         'message' => 'Data input successfully'
        //     ]);
        // }else{
        //     echo json_encode([
        //         'message' => 'Data Failed to input'
        //     ]);
        
        // }
        // return response()->json($response, 200);

    }
}
