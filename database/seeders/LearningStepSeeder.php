<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningStepSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('learning_steps')->insert([
      //*Frontend
      [
        'title' => 'Изучаем HTML',
        'number' => 1,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Изучаем CSS',
        'number' => 2,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Создаем мини-сайт используя HTML и CSS',
        'number' => 3,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Верстка лендинга по макету из Figma',
        'number' => 4,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Изучаем JavaScript',
        'number' => 5,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Создаем сайт используя HTML, CSS и JS',
        'number' => 6,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Изучаем React. Делаем финальный проект',
        'number' => 7,
        'group_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      //*Backend
      [
        'title' => 'Выбрали профессию и язык программирования',
        'number' => 1,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Начали обучение по программе курса',
        'number' => 2,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Выполнили финальный проект для портфолио',
        'number' => 3,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Составили резюме вместе с нашей командой',
        'number' => 4,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Подготовились к собеседованию',
        'number' => 5,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Вышли на работу по новой специальности!',
        'number' => 6,
        'group_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      //*Figma
      [
        'title' => 'Знакомство с Figma',
        'number' => 1,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Иконки, иллюстрации и картинки',
        'number' => 2,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Библиотеки компонентов и общие стили',
        'number' => 3,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Адаптив на разные устройства',
        'number' => 4,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Изучение разных плагинов для работы с Figma',
        'number' => 5,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Подготовка макета для разработчиков',
        'number' => 6,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Если вы разработчик, сверстаете макет который сами создали',
        'number' => 7,
        'group_id' => 3,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      //*Git
      [
        'title' => 'Введение в Git. Основные команды терминала',
        'number' => 1,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Работа с репозиториями в Git',
        'number' => 2,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Работа с ветками репозитория',
        'number' => 4,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Учимся настраивать GitHub',
        'number' => 4,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Командная строка',
        'number' => 5,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Публикация репозитория',
        'number' => 6,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'title' => 'Самостоятельная работа',
        'number' => 7,
        'group_id' => 4,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],

    ]);
  }
}
