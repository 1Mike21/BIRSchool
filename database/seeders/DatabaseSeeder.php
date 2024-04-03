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
      $this->call(CreateAdminSeeder::class);
      $this->call(GroupSeeder::class);
      $this->call(LearningStepSeeder::class);
      $this->call(CourseSeeder::class);
      $this->call(ThemeSeeder::class);
      $this->call(PolyResourceSeeder::class);
    }
}
