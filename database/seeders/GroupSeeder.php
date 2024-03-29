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
          'icon' => '/storage/icons/frontend.svg',
          'title' => 'FrontEnd Pro',
          'level' => 'Продвинутый уровень',
          'description' => 'Освойте с нуля HTML, CSS, и прокачайте свои знания по JS и React',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => '/storage/icons/backend.svg',
          'title' => 'BackEnd Pro',
          'level' => 'Продвинутый уровень',
          'description' => 'Освойте с нуля PHP, серверные технологии и фреймворк Laravel',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => '/storage/icons/figma.svg',
          'title' => 'Figma для разработчиков',
          'level' => 'Базовый уровень',
          'description' => 'Изучите самый популярный дизайнерский инструмент',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'icon' => '/storage/icons/git.svg',
          'title' => 'Git и командная строка',
          'level' => 'Базовый уровень',
          'description' => 'Выучите два самых важных инструмента для любого программиста',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
