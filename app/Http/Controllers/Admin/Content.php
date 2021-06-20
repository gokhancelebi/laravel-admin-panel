<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Content extends Controller
{
    public function __construct()
    {
        $this->table = Input::get('table');
        $this->page = (int) Input::get('page') ?: 0;
    }

    public function create()
    {
        //olusturmak icin bos halini goster
    }

    public function store(Request $request)
    {
        //olustur ve goster
    }


    public function edit($id)
    {
        //Duzenlemek icin dolu halini goster
    }

       public function update(Request $request, $id)
    {
        //duzenle ve goster
    }

    public function destroy($id)
    {
        //Sil ve yonlendir
    }
}
