<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{   
    public function index()
    { 
        return view("home.userpage");
    }







    public function redirect()
    {
      $usertype = Auth::user()->usertype;

      if($usertype == "0")
      {
        return view('home.userpage');

      }

      else
        {
            return view('admin.home');
        }
    }

    public function mybookings()
    {
       return view("home.my_bookings");
    }

    public function search()
{
    return view('home/search');
}
}




