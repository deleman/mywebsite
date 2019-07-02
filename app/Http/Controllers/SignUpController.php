<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //signup user
    public function signup(){
        return view('signup\newpost');
    }


    public function createNewPost(){
        return ;
    }
}
