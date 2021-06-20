<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


$role = Role::create(['name' => 'superadmin']);


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = Role::create(['name' => 'member']);

        $superAdmin = User::create([
            'name' => "admin",
            'email' => "contact@example.com",
            'password' => bcrypt("123456789"),
        ]);

        $superAdmin->assignRole("superadmin");
    }
}
