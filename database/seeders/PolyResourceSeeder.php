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
        //*Frontend
        [
          'title' => 'Кто такой Frontend-разработчик?',
          'text' => 'Frontend-разработчик программирует клиентскую сторону сайта — то, с чем соприкасается пользователь. Для этого нужно хорошо знать язык разметки страницы HTML, стилизации CSS и программировать на JavaScript.
          JavaScript позволяет разрабатывать игры, сайты и сервисы с интересными эффектами. С его помощью создают яркие, запоминающиеся проекты, на которые пользователь захочет вернуться.',
          'img' => '/group_course/1.png',
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
          'img' => '/group_course/1f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для фрилансеров',
          'text' => 'Кто готов прокачать свои скилы — освоить JavaScript и React, чтобы браться за более комплексные задачи. Вы сможете вырасти как специалист и пополнить своё резюме новыми кейсами.',
          'img' => '/group_course/2f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        //*Backend
        [
          'title' => 'Кто такой Backend-разработчик?',
          'text' => 'Backend разработчик — это специалист, который занимается программно-административной частью веб-приложения, внутренним содержанием системы, серверными технологиями — базой данных, архитектурой, программной логикой.
          PHP - один из самых востребованных языков для разработки сайтов. Создан для веб-разработки, внедряется в HTML. Это универсальный язык: работает во всех известных ОС, подходит для ООП. Многие CMS написаны на PHP.',
          'img' => '/group_course/2.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Этот курс для вас, если вам интересно развиваться в IT, а также если вы',
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
          'img' => '/group_course/2b.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Хотите зарабатывать больше',
          'text' => 'Профессиональным разработчикам, которые хотят прокачать свои скиллы и получить больше практики в фреймворке Laravel и других серверных технологиях.',
          'img' => '/group_course/2f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Мечтаете работать в перспективной сфере и постоянно расти',
          'text' => 'Получите мотивацию развиваться в IT. Будете разбираться в создании веб-продуктов изнутри. Сможете создать собственный проект.',
          'img' => '/group_course/1b.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        //*Figma
        [
          'title' => 'Графический редактор Figma и его возможности',
          'text' => 'Figma — любимый инструмент веб- и UX-дизайнеров по всему миру. А ещё один макет в Figma могут одновременно редактировать несколько человек — это идеальный инструмент для командной работы.
          Пройдя курс, вы научитесь создавать интерактивные прототипы, как разработчик сможете написать сайт по уже готову макету.',
          'img' => '/group_course/3.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Чему вы научитесь',
          'text' => '',
          'img' => '',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Профессионально работать в Figma',
          'text' => 'Разберётесь в интерфейсе и настройках программы. Научитесь работать с фигурами, слоями и внутренними редакторами.',
          'img' => '/group_course/3b.jpeg',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Готовить адаптивные макеты',
          'text' => 'Сможете создавать прототипы с разной степенью детализации и адаптировать их под любые устройства.',
          'img' => '/group_course/3b.jpeg',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Работать над проектом в команде',
          'text' => 'Освоите продвинутые инструменты, чтобы лучше планировать работу, быстро вносить правки и согласовывать макеты.',
          'img' => '/group_course/3b.jpeg',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        //*Git
        [
          'title' => 'Что такое Git?',
          'text' => 'Git – распределенная система контроля версий (DVCS). Он является самым необходимым инструментом разработчика. Везде, где требуется командная работа над одним проектом, Git является золотым стандартом.
          Вы узнаете больше о работе с репозиториями и историей изменений файлов. В итоге вы научитесь быстро восстанавливаться после ошибок, изучать историю изменений и вести совместную разработку.',
          'img' => '/group_course/1g.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для кого этот курс?',
          'text' => '',
          'img' => '',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для новичков',
          'text' => 'Кто хочет обучиться с нуля. Новички, которые хотят изучить Git но не знают с чего начать.',
          'img' => '/group_course/1f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => 'Для профессионалов',
          'text' => 'Люди, которые используют GIT в повседневной работе, но хотели бы углубить свои знания.',
          'img' => '/group_course/2f.png',
          'resourceable_type' => 'App\Models\Group',
          'resourceable_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
