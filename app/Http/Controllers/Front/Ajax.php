<?php

namespace App\Http\Controllers\Front;

use App\Classes\Admin\AjaxHandler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class Ajax extends Controller
{
    // Captcha uzerinden islem yapan dahili ajax kutuphanesi

    /*
     * Private keyleri ve gizli bolumleri tanimla sadece duzenlenebilir ve duzenlenemez alanlar belli olsun
     * AjaxHandler adinda bir class yaz
     *
     */

    // private $ajaxHandler;
    public $allowedTables;

    public function __construct(){
        $this->allowedTables = [
            "iletisim_formu"
        ];
    }
    public function index(Request $request){
        $validated = $request->validate([
            'table' => ['required|in:'.implode(',',$this->allowedTables)]
        ]);
    }
}
