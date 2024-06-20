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
          'slug' => 'html',
          'icon' => '/icons/html5.svg',
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
          'slug' => 'css',
          'icon' => '/icons/css3.svg',
          'description' => '',
          'price' => 950,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Git и командная строка',
          'slug' => 'git-and-command-line',
          'icon' => '/icons/course-git.svg',
          'description' => '',
          'price' => 1500,
          'is_active' => 1,
          'group_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'JavaScript',
          'slug' => 'javascript',
          'icon' => '/icons/javascript.svg',
          'description' => '',
          'price' => 3500,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'React',
          'slug' => 'react',
          'icon' => '/icons/react.svg',
          'description' => '',
          'price' => 5000,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'PHP',
          'slug' => 'php',
          'icon' => '/icons/php.svg',
          'description' => '',
          'price' => 3500,
          'is_active' => 1,
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Vue',
          'slug' => 'vue',
          'icon' => '/icons/vue.svg',
          'description' => '',
          'price' => 4000,
          'is_active' => 1,
          'group_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Docker',
          'slug' => 'docker',
          'icon' => '/icons/docker.svg',
          'description' => '',
          'price' => 3000,
          'is_active' => 1,
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Figma',
          'slug' => 'figma',
          'icon' => '/icons/course-figma.svg',
          'description' => '',
          'price' => 2000,
          'is_active' => 1,
          'group_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Laravel',
          'slug' => 'laravel',
          'icon' => '/icons/laravel.svg',
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
