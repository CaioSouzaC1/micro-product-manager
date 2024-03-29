<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Caio Souza',
            'email' => 'caiosouza@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::factory(10)->create();
        Product::factory(10)->create();
    }
}
