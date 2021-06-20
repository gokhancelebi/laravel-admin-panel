<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Member extends Controller
{
    public function __construct()
    {
        $this->table = 'users';
    }
}
