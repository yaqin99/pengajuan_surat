<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
{
    $faker = Faker::create('id_ID');

    $maduraNames = [
        "Abdullah", "Rifadi", "Syaiful", "Zaini", "Latif", "Salman", "Nasrullah", 
        "Rofi'i", "Khoirul", "Syahrul", "Hasan", "Basri", "Fikri", "Ghazali", "Saiful", 
        "Rifqi", "Jufri", "Soleh", "Wahid", "As'ad", "Kamil", "Hakim", "Thohir", 
        "Burhan", "Yasin", "Rais", "Hamid", "Zubair", "Faizi", "Hilmi"
    ];

    $alamatPamaroh = [
        "Jl. Pamaroh Barat", "Jl. Raya Pamaroh", "Jl. Pamaroh Tengah", "Jl. Pamaroh Timur",
        "Gg. Melati Pamaroh", "Gg. Mawar Pamaroh", "Dusun Tengan Pamaroh", "Dusun Barat Pamaroh",
        "Dusun Timur Pamaroh", "Jl. Pondok Pamaroh", "Jl. Masjid Pamaroh", "Jl. Pendidikan Pamaroh"
    ];

    // 1. Generate 1000 data untuk tabel berkas
    for ($i = 0; $i < 1000; $i++) {
        DB::table('berkas')->insert([
            'ktp' => 'default',
            'ktp_ayah' => 'default',
            'ktp_ibu' => 'default',
            'kk' => 'default',
            'surat_nikah' => 'default',
        ]);
    }

    // Ambil array id dari tabel berkas, acak supaya random
    $berkasIds = range(1, 1000);
    shuffle($berkasIds);

    // 2. Generate 1000 user dan berikan masing-masing 1 berkas unik
    for ($i = 0; $i < 1000; $i++) {
        $first = $faker->randomElement($maduraNames);
        $last = $faker->lastName();
        $fullName = $first . ' ' . $last;
        $usernameBase = strtolower(str_replace(' ', '', $fullName));

        // agar tidak bentrok email, tambahkan angka unik
        $username = $usernameBase . $i;
        $email = $username . '@gmail.com';

        DB::table('users')->insert([
            'name' => $fullName,
            'berkas_id' => $berkasIds[$i], // ambil berkas unik
            'username' => $username,
            'alamat' => $faker->randomElement($alamatPamaroh),
            'noHp' => $faker->phoneNumber,
            'rt' => str_pad($faker->numberBetween(1, 5), 2, '0', STR_PAD_LEFT),
            'rw' => str_pad($faker->numberBetween(1, 10), 2, '0', STR_PAD_LEFT),
            'nik' => $faker->numerify('################'),
            'pekerjaan' => $faker->randomElement(['Wirausaha', 'Petani', 'Pedagang', 'Guru', 'Pelajar', 'Mahasiswa']),
            'agama' => 'Islam',
            'status_perkawinan' => $faker->randomElement(['Kawin', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati']),
            'tempat_lahir' => 'Pamekasan',
            'tanggal_lahir' => $faker->date('Y-m-d', '-18 years'),
            'email' => $email,
            'password' => Hash::make($username), // password = username
        ]);
    }
}
    
}
