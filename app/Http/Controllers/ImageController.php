<?php

namespace App\Http\Controllers;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Manager;
use App\Http\Controllers\Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Employee;
use App\Controllers\AuthController;
use Illuminate\Support\Facades\Storage;
use App\Models\TaskReport;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Retrieve the image file from the request
        $image = $request->file('image');
        
     
        // // Save the image file to the server
        $path = Storage::putFile('images', $image);
       
        $report = new TaskReport;
         $report->report_image_url =($path);
         // set other properties of the report model as necessary
        $report->save();
        // // Return a response with the path to the saved image file
         return response()->json(['path' => $path]);
         

    }

    public function show($id)
    {
        $query=TaskReport::where('task_report_id', $id)->first();
       
        $imagePath =  $query->report_image_url;
       
        if (!Storage::exists($imagePath)) {
            return response()->json(['message' => 'Image not found'], 404);
        }
        
        $file = Storage::get($imagePath);
        $type = Storage::mimeType($imagePath);
        
        return response($file)->header('Content-Type', $type);
    }
}

// public function uploadImage(Request $request){
//     $image = $_FILES['image']['name'];
//     $name = $_POST['name'];

//     $imagePath = 'upload/'.$image;
//     $tmp_name = $_FILES['image']['tmp_name'];

//     move_uploaded_file($tmp_name,$imagePath);

//     $taskreport->query("INSERT INTO pathstrides.task_report(name,image)VALUES('".$name."','".$image."')");

//     if($request){
//         echo json_encode([
//             'message' => 'Data input successfully'
//         ]);
//     }else{
//         echo json_encode([
//             'message' => 'Data Failed to input'
//         ]);
    
//     }
//     return response()->json($response, 200);

// }