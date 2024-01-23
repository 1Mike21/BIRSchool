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
      $admin = User::create([
        'name' => 'Михаил',
        'surname' => 'Соколов',
        'email' => 'mihail.sokolov21@yandex.ru',
        'password' => Hash::make('12345'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      Role::create([
        'name' => 'admin',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      $admin->assignRole('admin');

    }
}
