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
                'ktp' => 'default' , 
                'ktp_ayah' => 'default' , 
                'ktp_ibu' => 'default' , 
                'kk' => 'default' , 
                'surat_nikah' => 'default' , 
            ]
            );
        DB::table('berkas')->insert(
            [
                'ktp' => 'default' , 
                'ktp_ayah' => 'default' , 
                'ktp_ibu' => 'default' , 
                'kk' => 'default' , 
                'surat_nikah' => 'default' , 
            ]
            );
        DB::table('berkas')->insert(
            [
                'ktp' => 'default' , 
                'ktp_ayah' => 'default' , 
                'ktp_ibu' => 'default' , 
                'kk' => 'default' , 
                'surat_nikah' => 'default' , 
            ]
            );
    }
}
