<?php


namespace App\Classes\Admin;


use Maatwebsite\Excel\Concerns\FromCollection;

class TableCollection implements FromCollection
{
    public function __construct($table,$hide = [])
    {
        $this->table = $table;
        $this->hide = $hide;
    }

    public function collection(){
        return DB::table($this->table)->get()->makeHidden($this->hide);
    }

}
