<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=User::create([
            'name'=>'Admin',
            'isAdmin' => 1,
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password'),
            'email_verified_at' => now(),
            "created_at" =>now(),
            "updated_at" => now(),
        ]);

    }
}
