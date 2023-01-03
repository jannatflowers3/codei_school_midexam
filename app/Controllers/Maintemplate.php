<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Maintemplate extends BaseController
{
    public function index()
    {
        return view("main_template");
    }
    public function courses()
    {
        return view("pages/courses");
    }
    public function gallery()
    {
        return view("pages/gallery");
    }
    public function contact()
    {
        return view("pages/contact");
    }
    public function registration()
    {
        return view("pages/registration");
    }
    
}
