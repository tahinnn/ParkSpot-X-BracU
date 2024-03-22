<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        
        return view('locations/show', ['id' => $id]);
    }

}
