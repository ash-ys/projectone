<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('welcome');
    }
    public function getGallery(){
        return view('gallery');
    }
    public function getTemplate(){
        return view('template');
    }
}
