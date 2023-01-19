<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }


    public function projects(){
        return view('admin.projects');
    }

    public function fournisseurs(){
        return view('admin.fournisseurs');
    }
}
