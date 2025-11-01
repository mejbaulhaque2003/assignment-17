<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function Template(){
        return view('demo.portfolio');
    }
    public function index(){
        return view('pages.home');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function project(){
        return view('pages.projects');
    }
}
