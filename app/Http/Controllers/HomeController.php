<?php

namespace App\Http\Controllers;

use App\user_requests;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home(){
      return view('frontend.pages.home') ;
    }
    public function about(){
        return view('frontend.pages.about') ;
    }
    public function service(){
        return view('frontend.pages.service') ;
    }
    public function admin(){
        return view('backend.pages.dashboard') ;
    }
    public function details(){
        return view('backend.pages.details') ;
    }
}