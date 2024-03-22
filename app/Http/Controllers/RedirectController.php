<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectController extends Controller
{
    public function search()
    {
        // Perform redirection
        return view('search');
    }
}
