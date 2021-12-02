<?php

namespace App\Http\Controllers\Admin\Structure;

use App\Models\Admin\AdminMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class Structure extends Controller
{
    public function menu()
    {
        $menus = AdminMenu::with("tables")->get();
        return view("admin.structure.menu.index", compact('menus'));
    }

    public function newMenu()
    {
        return view("admin.structure.menu.new");
    }

    public function newMenuPost(Request $request)
    {

        try{
            AdminMenu::create([
                "name" => $request->menu,
                "icon" => "fa-fa",
                "order" => 1
            ]);
            return redirect()->back()->with(["status" => "success", "msg" => "Ekleme işlemi başarılı","title" => "Başarılı"]);
        }catch (Exception $e){
            return redirect()->back()->with(["status" => "error", "msg" => "Ekleme işlemi başarısız","title" => "Başarısız"]);
        }




    }
}
