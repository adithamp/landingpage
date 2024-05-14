<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function solusi()
    {
        return view('solusi');
    }

    public function fitur()
    {
        return view('fitur');
    }
}
