<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    //
     public function index(Request $request)
    {
        $posts = Profile::all()->sortBy('id');
        return view('profile.index',['posts' => $posts]);
    }
}