<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            SuperAdminSeeder::class,
            TransportationOwnerSeeder::class,
            VehicleSeeder::class,
            AccommodationSeeder::class,
            TransportationOwnerPermissionSeeder::class,
            AccommodationOwnerPermissionSeeder::class,
            RoomSeeder::class,
            StaffSeeder::class,
        ]);
    }
}
