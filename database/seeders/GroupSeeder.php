<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('groups')->insert([
        [
          'icon' => 'icons/frontend.svg',
          'title' => 'FrontEnd Pro',
          'slug' => 'frontend-pro',
          'level' => 'Продвинутый уровень',
          'is_active' => 1,
          'description' => 'Освойте с нуля HTML, CSS, и прокачайте свои знания по JS и React',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => 'icons/backend.svg',
          'title' => 'BackEnd Pro',
          'slug' => 'backend-pro',
          'level' => 'Продвинутый уровень',
          'is_active' => 1,
          'description' => 'Освойте с нуля PHP, серверные технологии и фреймворк Laravel',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => 'icons/figma.svg',
          'title' => 'Figma для разработчиков',
          'slug' => 'figma-for-developers',
          'level' => 'Базовый уровень',
          'is_active' => 1,
          'description' => 'Изучите самый популярный дизайнерский инструмент',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => 'icons/git.svg',
          'title' => 'Git и командная строка',
          'slug' => 'git-and-command-line',
          'level' => 'Базовый уровень',
          'is_active' => 1,
          'description' => 'Выучите два самых важных инструмента для любого программиста',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
