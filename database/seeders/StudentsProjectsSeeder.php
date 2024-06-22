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
          'img' => '/storage/slider_student_portfolio/work1.jpg',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work2.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work3.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work4.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work5.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work6.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'img' => '/storage/slider_student_portfolio/work7.png',
          'resourceable_type' => 'App\Models\User',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
