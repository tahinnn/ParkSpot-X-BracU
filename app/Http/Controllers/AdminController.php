<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\parking_attendants;

class AdminController extends Controller
{
    public function addview() 
    {
       return view("admin.add_employee");
    }


    public function upload(Request $request)
    {
        $parking_attendants = new parking_attendants;

        $image = $request -> file ;
        $imagename = time().".".$image->getClientoriginalExtension();

    $request -> file -> move("employeeimage", $imagename);
    $parking_attendants -> Image = $imagename;
    $parking_attendants -> name = $request -> name;
    $parking_attendants -> phone = $request -> number;
    $parking_attendants -> Designation = $request -> Designation;
    $parking_attendants -> save();
    return redirect()->back()->with("message","Employee added successfully");
    }
}
