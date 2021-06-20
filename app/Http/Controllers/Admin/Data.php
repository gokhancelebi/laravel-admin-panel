<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Admin\TableCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Data extends Controller
{

    public function export()
    {
        return Excel::download(new TableCollection(Input::get("table")), Input::get('table'));
    }

    public function storeExcel()
    {
        return Excel::store(new TableCollection(Input::get("table")), 'data.xlsx');
    }

}
