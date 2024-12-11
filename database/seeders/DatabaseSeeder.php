<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            $this->call([
                UserSeeder::class,
                UserDetailsSeeder::class,
                SettingSeeder::class,
                PermissionSeeder::class,
                AboutSeeder::class,
                FooterLinkGroupSeeder::class,
                FooterLinkSeeder::class,
                SocialSeeder::class,
            ]);
        }
    }
}
