<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@corralon.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        $employee = User::create([
            'name' => 'employee',
            'surname' => 'employee',
            'email' => 'employee@corralon.com',
            'password' => Hash::make('employee')
            ]);
        $employee->assignRole('employee');
    }
}
