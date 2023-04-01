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
            ]
            );
       
        DB::table('admins')->insert(
            [
                'name' => "Syifa Cantik" , 
                'username' => "syifa" , 
                'email' => "syifa@gmail.com" , 
                'password' => bcrypt('syifa') , 
            ]
            );
       
    }
}
