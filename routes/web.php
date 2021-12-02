<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Structure;


Route::group(['as' => 'admin.','prefix' => 'admin'],function (){
    Route::get('/dashboard',[Admin\Dashboard::class,'index'])->name('dashboard');
    Route::get('/list',[Admin\Listing::class,'index'])->name('list');
    Route::resource('contents', Admin\Content::class)->only([
        'show','index'
    ]);
    Route::group(['as' => 'structure.','prefix' => 'structure','middleware' => ['role:superadmin']],function(){
        Route::get('/menus',[Structure\Structure::class,'menu'])->name('menus');
        Route::get('/menu/new',[Structure\Structure::class,'newMenu'])->name('menus.new');
        Route::post('/menu/new',[Structure\Structure::class,'newMenuPost']);
        Route::get('/table/add/{menu_id}',[Structure\Table::class,'editTable'])->name('table.new');
        Route::post('/table/add/{menu_id}',[Structure\Table::class,'editTablePost']);
        Route::get('/table/{menuId}',[Structure\Table::class,'editTable'])->name('table.edit');
        Route::get('/table/get-columns/{table}',[Structure\Table::class,'getColumns'])->name('table.getcolumns');
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::post("ajax",[Front\Ajax::class,'index'])->name('ajax');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
