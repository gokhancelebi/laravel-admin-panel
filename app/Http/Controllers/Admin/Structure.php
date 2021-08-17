<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\AdminMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Structure extends Controller
{
   public function menu(){
       $menus = AdminMenu::get();
       return view("admin.structure.menu",compact('menus'));
   }

   public function menuTable($menuId){

   }

   public function table(){

   }

   public function saveTable(){

   }
}
