<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenuTable extends Model
{
    use HasFactory;
    protected $table = "admin_menu_tables";
    protected $casts = [
        'columns' => 'array'
    ];


}
