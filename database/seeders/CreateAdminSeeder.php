<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create([
        'name' => 'Admin',
        'surname' => 'Admin',
        'email' => 'admin@yandex.ru',
        'password' => Hash::make('12345678'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ])->assignRole('Администратор');
    }
}
