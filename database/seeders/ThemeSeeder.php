<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('themes')->insert([
      [
        'title' => 'Введение в HTML',
        'slug' => 'introduction-to-html',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Структура HTML документа',
        'slug' => 'structure-of-html-document',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Форматирование текста',
        'slug' => 'text-formatting',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Работа с изображениями и мультимедиа',
        'slug' => 'working-with-images-and-multimedia',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Таблицы',
        'slug' => 'tables',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Формы и элементы управления',
        'slug' => 'forms-and-controls',
        'content' => '',
        'course_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
  }
}
