<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerkasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berkas')->insert(
            [
                'name' => "Moh. Sayadi" , 
                'berkas_id' => 1 , 
                'username' => "sayadi" , 
                'alamat' => "Jl. Sersan Mesrul Gg. 3B" , 
                'noHp' => '0852365845645' , 
                'rt' => "02" , 
                'rw' => "07" , 
                'nik' => "3528040303690005" , 
                'email' => "sayadi@gmail.com" , 
                'password' => bcrypt('sayadi') , 
            ]
            );
    }
}
