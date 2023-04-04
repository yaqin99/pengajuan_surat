<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'name' => "Moh Ainul Yaqin" , 
                'username' => "yaqin" , 
                'email' => "yaqin@gmail.com" , 
                'password' => bcrypt('yaqin') , 
                'isAdmin' => 0 , 
            ]
            );
       
        DB::table('admins')->insert(
            [
                'name' => "Admin" , 
                'username' => "admin" , 
                'email' => "admin@gmail.com" , 
                'password' => bcrypt('admin') , 
                'isAdmin' => 1
            ]
            );
       
    }
}
