<?php

namespace App\Http\Controllers\Admin\Structure;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminMenuTable;
use Illuminate\Http\Request;
use App\Models\Admin\AdminMenu;
use DB;
use Schema;

class Table extends Controller
{
    function editTable ($menu_id){

        $tables = DB::select('SHOW TABLES');

        $tables = collect($tables)->map(function ($table){
            $key = "Tables_in_laravel-admin-panel";
            return  $table->$key;
        });

        return view("admin.structure.table.edit",["menu_id" => $menu_id,"tables" => $tables]);
    }

    function editTablePost(Request  $request,$menu_id){
        $newTable = AdminMenuTable::create([
            "admin_menu_id" => $menu_id,
        ]);

        return redirect()->route("admin.structure.menus");
    }

    function getColumns($table){
        return Schema::getColumnListing($table);
    }
}
