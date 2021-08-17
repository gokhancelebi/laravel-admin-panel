<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;


Route::group(['as' => 'admin.','prefix' => 'admin'],function (){
    Route::get('/dashboard',[Admin\Dashboard::class,'index'])->name('dashboard');
    Route::get('/list',[Admin\Listing::class,'index'])->name('list');
    Route::resource('contents', Admin\Content::class)->only([
        'show','index'
    ]);
    Route::group(['as' => 'structure.','prefix' => 'structure','middleware' => ['role:superadmin']],function(){
        Route::get('/menus',[Admin\Structure::class,'menu'])->name('menus');
        Route::get('/table/{menuId}',[Admin\Structure::class,'menuTable'])->name('table');
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
