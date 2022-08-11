<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        Admin::create($input);
        return redirect('admin')->with('flash_message', 'Admin Addedd!'); 
    }
}
