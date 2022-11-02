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

class ImageController extends Controller
{
    public function upload(Request $request){
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
   }
}
