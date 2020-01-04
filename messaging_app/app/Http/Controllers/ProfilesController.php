<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($profile)
    {
       $profile = User::find($profile) ;
        return view('home', [
            'profile' =>$profile,
        ]);
    }
}
