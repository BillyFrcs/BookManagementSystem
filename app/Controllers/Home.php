<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Index()
    {
        return view('welcome_message');
    }
}
