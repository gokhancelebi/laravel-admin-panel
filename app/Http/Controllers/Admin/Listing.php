<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Listing extends Controller
{
    public function __construct()
    {
        $this->table = Input::get('table');
        $this->page = (int) Input::get('page') ?: 0;
    }

    function index(){

    }
}
