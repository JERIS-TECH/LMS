<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'role_name' => 'General User'],
            ['id' => 2, 'role_name' => 'Paid User'],
            ['id' => 3, 'role_name' => 'Admin'],
            ['id' => 4, 'role_name' => 'Master Admin'],
        ];

        DB::table('roles')->insert($roles);
    }
}

