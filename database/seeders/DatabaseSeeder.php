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

        $adminUsers = [
            [
                'email' => 'admin@sitmadani.sch.id',
                'name' => 'Administrator Yayasan Agung Madani',
                'password' => bcrypt('Madani2026!'),
                'role' => 'super_admin',
                'unit' => 'yayasan',
            ],
            [
                'email' => 'admin_tk@sitmadani.sch.id',
                'name' => 'Admin TKS IT Madani Kayuagung',
                'password' => bcrypt('Madani2026!'),
                'role' => 'admin',
                'unit' => 'tk',
            ],
            [
                'email' => 'admin_sd@sitmadani.sch.id',
                'name' => 'Admin SDS IT Madani Kayuagung',
                'password' => bcrypt('Madani2026!'),
                'role' => 'admin',
                'unit' => 'sd',
            ],
            [
                'email' => 'admin_smp@sitmadani.sch.id',
                'name' => 'Admin SMPS IT Madani Kayuagung',
                'password' => bcrypt('Madani2026!'),
                'role' => 'admin',
                'unit' => 'smp',
            ],
        ];

        foreach ($adminUsers as $usr) {
            User::updateOrCreate(
                ['email' => $usr['email']],
                $usr
            );
        }

        $this->call([
            SchoolDataSeeder::class,
            EkstrakurikulerSeeder::class,
        ]);
    }
}
