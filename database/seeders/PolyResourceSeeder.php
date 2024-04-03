<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolyResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('poly_resources')->insert([
        [
          'title' => 'Кто такой Frontend-разработчик?',
          'text' => 'Frontend-разработчик программирует клиентскую сторону сайта — то, с чем соприкасается пользователь. Для этого нужно хорошо знать язык разметки страницы HTML, стилизации CSS и программировать на JavaScript.
          JavaScript позволяет разрабатывать игры, сайты и сервисы с интересными эффектами. С его помощью создают яркие, запоминающиеся проекты, на которые пользователь захочет вернуться.',
          'img' => '/storage/group_course/1.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для кого курс?',
          'text' => '',
          'img' => '',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для новичков',
          'text' => 'Кто хочет обучиться программированию с нуля. Программа курса рассчитана для начинающих фронтенд-разработчиков и построена так, что вы сможете ее освоить даже без технического бэкграунда.',
          'img' => '/storage/group_course/1f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для фрилансеров',
          'text' => 'Кто готов прокачать свои скилы — освоить JavaScript и React, чтобы браться за более комплексные задачи. Вы сможете вырасти как специалист и пополнить своё резюме новыми кейсами.',
          'img' => '/storage/group_course/2f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Кто такой Backend-разработчик?',
          'text' => 'Backend разработчик — это специалист, который занимается программно-административной частью веб-приложения, внутренним содержанием системы, серверными технологиями — базой данных, архитектурой, программной логикой.
          PHP - один из самых востребованных языков для разработки сайтов. Создан для веб-разработки, внедряется в HTML. Это универсальный язык: работает во всех известных ОС, подходит для ООП. Многие CMS написаны на PHP.',
          'img' => '/storage/group_course/2.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Этот курс PHP для вас, если вам интересно развиваться в IT, а также если вы',
          'text' => '',
          'img' => '',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Заскучали на старой работе или достигли потолка в своей профессии',
          'text' => 'Кто хочет обучиться программированию с нуля. Программа курса рассчитана для начинающих backend-разработчиков и построена так, что вы сможете ее освоить даже без технического бэкграунда.',
          'img' => '/storage/group_course/2b.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Хотите зарабатывать больше',
          'text' => 'Профессиональным разработчикам, которые хотят прокачать свои скиллы и получить больше практики в фреймворке Laravel и других серверных технологиях.',
          'img' => '/storage/group_course/2f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Мечтаете работать в перспективной сфере и постоянно расти',
          'text' => 'Получите мотивацию развиваться в IT. Будете разбираться в создании веб-продуктов изнутри. Сможете создать собственный проект.',
          'img' => '/storage/group_course/1b.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        // [
        //   'title' => 'Что вы изучите',
        //   'text' => '',
        //   'img' => '',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
        // [
        //   'title' => 'Фреймворк для создания веб-приложений на PHP',
        //   'text' => '',
        //   'img' => '/storage/group_course/laravel.png',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
        // [
        //   'title' => 'Контейнеризатор приложений',
        //   'text' => '',
        //   'img' => '/storage/group_course/docker.png',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
        // [
        //   'title' => 'Язык запросов для работы с базой данных',
        //   'text' => '',
        //   'img' => '/storage/group_course/sql.png',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
        // [
        //   'title' => 'Система контроля версий c открытым исходным кодом',
        //   'text' => '',
        //   'img' => '/storage/group_course/git.png',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
        // [
        //   'title' => 'Язык программирования для backend-разработки',
        //   'text' => '',
        //   'img' => '/storage/group_course/php.png',
        //   'resourceable_type' => 'App\Models\Group',
        //   'resourceable_id' => 2,
        //   'created_at' => Carbon::now(),
        //   'updated_at' => Carbon::now(),
        // ],
      ]);
    }
}
