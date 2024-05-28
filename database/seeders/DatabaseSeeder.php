<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
          RoleSeeder::class,
          CreateAdminSeeder::class,
          GroupSeeder::class,
          LearningStepSeeder::class,
          CourseSeeder::class,
          ThemeSeeder::class,
          PolyResourceSeeder::class,
          StudentsProjectsSeeder::class,
          ReviewSeeder::class,
        ]
      );
    }
}
