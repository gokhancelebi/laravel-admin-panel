<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    use HasFactory;
    protected $guarded = ["id"];


    function tables(){
        return $this->hasMany(AdminMenuTable::class);
    }
}
