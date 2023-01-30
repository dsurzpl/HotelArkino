<?php

namespace Database\Seeders;

use App\Models\Reservations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        // Wywołuje RoomSeeder i RoomTypeSeeder poleceniem php artisan db:seed
        $this->call([
            RoomSeeder::class,
            RoomTypeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
