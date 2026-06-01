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
        User::create([
            'name' => 'Classic Admin',
            'email' => 'info@classicre.co.zw',
            'password' => 'ClassicAdmin2026!',
        ]);

        $this->command->info('Admin user created: info@classicre.co.zw / ClassicAdmin2026!');
    }
}
