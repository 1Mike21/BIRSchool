<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('poly_resources')->insert([
        [
          'img' => '/storage/slider_student_portfolio/w1.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w2.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w3.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w4.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w5.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w6.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/w7.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
