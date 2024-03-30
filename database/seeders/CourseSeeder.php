<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('courses')->insert([
        [
          'title' => 'HTML',
          'icon' => '/storage/icons/html5.svg',
          'description' => 'Онлайн-курс по HTML - это обучающая программа, целью которой является предоставление студентам фундаментальных знаний и навыков в области
          языка гипертекстовой разметки (HTML). Курс ориентирован на начинающих и тех, кто стремится познакомиться с веб-технологиями.',
          'price' => 500,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'CSS',
          'icon' => '/storage/icons/css3.svg',
          'description' => '',
          'price' => 950,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Git и командная строка',
          'icon' => '/storage/icons/course-git.svg',
          'description' => '',
          'price' => 1500,
          'is_active' => 1,
          'group_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'JavaScript',
          'icon' => '/storage/icons/javascript.svg',
          'description' => '',
          'price' => 3500,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'React',
          'icon' => '/storage/icons/react.svg',
          'description' => '',
          'price' => 5000,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'PHP',
          'icon' => '/storage/icons/php.svg',
          'description' => '',
          'price' => 3500,
          'is_active' => 1,
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Vue',
          'icon' => '/storage/icons/vue.svg',
          'description' => '',
          'price' => 3500,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Docker',
          'icon' => '/storage/icons/docker.svg',
          'description' => '',
          'price' => 3000,
          'is_active' => 1,
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Figma',
          'icon' => '/storage/icons/course-figma.svg',
          'description' => '',
          'price' => 2000,
          'is_active' => 1,
          'group_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Laravel',
          'icon' => '/storage/icons/laravel.svg',
          'description' => '',
          'price' => 5000,
          'is_active' => 1,
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

      ]);
    }
}
