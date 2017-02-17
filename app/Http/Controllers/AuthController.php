<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Input;
use Redirect;

class AuthController extends Controller
{
  public function index(){
     if(\Auth::check() && \Auth::user()->name) {
            return 'Hello '.\Auth::user()->name;
  }
    
}
}
