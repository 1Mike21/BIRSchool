<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('reviews')->insert([
        [
          'comment' => '/storage/slider_reviews/study1.jpg',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'comment' => '/storage/slider_reviews/study2.jpg',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'comment' => '/storage/slider_reviews/study3.jpg',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'comment' => '/storage/slider_reviews/study4.jpg',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
