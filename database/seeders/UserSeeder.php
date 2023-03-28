<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => "Moh. Sayadi" , 
                'username' => "sayadi" , 
                'alamat' => "Jl. Sersan Mesrul Gg. 3B" , 
                'rt' => "02" , 
                'rw' => "07" , 
                'nik' => "3528040303690005" , 
                'email' => "sayadi@gmail.com" , 
                'password' => bcrypt('sayadi') , 
            ]
            );
        DB::table('users')->insert(
            [
                'name' => "M. Harianto" , 
                'username' => "harianto" , 
                'alamat' => "Jl. Sersan Mesrul Gg. 2" , 
                'rt' => "02" , 
                'rw' => "08" , 
                'nik' => "3528040303690212" , 
                'email' => "harianto@gmail.com" , 
                'password' => bcrypt('harianto') , 
            ]
            );
        DB::table('users')->insert(
            [
                'name' => "Sataji" , 
                'username' => "sataji" , 
                'alamat' => "Jl. Rongkarong" , 
                'rt' => "02" , 
                'rw' => "09" , 
                'nik' => "35280405568590005" , 
                'email' => "sataji@gmail.com" , 
                'password' => bcrypt('sataji') , 
            ]
            );
    }
}
