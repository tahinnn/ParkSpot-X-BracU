<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function index()
    {
        return view('googleAutocomplete');
    }



    public function location()
    {
        return view('home/location');
    }



    public function show($id)
    {
        if ($id == 1) {
            return view('locations/show1', ['id' => $id]);
        }

        if ($id == 2) {
            return view('locations/show2', ['id' => $id]);
        }

        if ($id == 3) {
            return view('locations/show3', ['id' => $id]);
        }
        
    }
    


}



