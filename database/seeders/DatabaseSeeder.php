<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'admin@sitmadani.sch.id'],
            [
                'name' => 'Admin SMPS IT Madani Kayuagung',
                'password' => bcrypt('SitMadani2026!'),
                'role' => 'admin',
            ]
        );

        $this->call([
            SchoolDataSeeder::class,
            EkstrakurikulerSeeder::class,
        ]);
    }
}
