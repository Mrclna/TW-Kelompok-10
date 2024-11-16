<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController
{
    public function index(){
        $data = [
            'title' => 'index'
        ];
        return view("index", $data);
    }

    public function about(){
        $data = [
            'title' => 'about'
        ];
        return view("about", $data);
    }

    public function contact(){
        $data = [
            'title' => 'contact'
        ];
        return view("contact", $data);
    }

    public function gallery(){
        $data = [
            'title' => 'gallery'
        ];
        return view("gallery", $data);
    }

    public function login(){
        $data = [
            'title' => 'login'
        ];
        return view("login", $data);
    }

    public function register(){
        $data = [
            'title' => 'register'
        ];
        return view("register", $data);
    }

    public function restaurant(){
        $data = [
            'title' => 'restaurant'
        ];
        return view("restaurant", $data);
    }
}
