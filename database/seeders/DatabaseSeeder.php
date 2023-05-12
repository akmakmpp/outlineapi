<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'outline@nctbdmail.com',
            'password' => Hash::make('108302@Akm'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // DB::table('outlines')->insert([
        //     'outline_key' => Str::random(10),
        //     'exp_date' => Str::random(10)
        
        // ]);
    }
}
