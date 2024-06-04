<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Login;
use App\Models\MasterBarang;
use App\Models\PembelianBarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Login::factory(1)->create();
        MasterBarang::factory(5)->create();
        PembelianBarang::factory(5)->create();
        Login::create([
            "email"=> "admin@mail.com",
            "nama" => "administrator",
            "password"=> bcrypt("admin123"),
            "role" => "admin",
            "last_login" => "today"
        ]);

    }
}
