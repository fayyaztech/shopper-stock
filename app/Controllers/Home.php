<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function main()
    {
        return view('front/home_page');
    }

    function login()
    {
        return view('front/login');
    }
    function signup()
    {
        return view('front/signup');
    }
    public function index(): string
    {
        return view('welcome_message');
    }
}
