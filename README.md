<p align="center"><a href="https://birteam.ru/" target="_blank"><img src="https://birteam.ru/img/logo.png" width="400" alt="BirSchool Logo"></a></p>

## BIRschool
Образовательная платформа для изучения курсов по веб-разработке
## Установка
1.Клонирование репозитория:
```
https://github.com/1Mike21/BIRSchool.git
```
2.Переход в директорию проекта:
```
cd birschool
```
3.Создание копии файла настроек:
```
cp .env.example .env
```
4.Установка зависимостей:
```
composer i
npm i
```
5.Генерация ключа шифрования приложения:
```
php artisan key:generate
```
6.Обновление символической ссылки на хранилище:
```
php artisan storage:link
```
7.Перенос и заполнение базы данных:
```
php artisan migrate --seed
```
8.Запуск фронтсервера:
```
npm run dev
```
## Полезные ссылки:
- **[Laravel](https://laravel.com/docs/10.x)**
- **[Vue3](https://vuejs.org/guide/introduction.html)**
- **[Tailwind css](https://tailwindcss.com/)**
- **[Tailwind UI](https://tailwindui.com/components/marketing/sections/footers)**
- **[Inertia js](https://inertiajs.com/)**
- **[Laravel permission](https://spatie.be/docs/laravel-permission/v6/introduction)**
- **[Laravel Jetsream](https://jetstream.laravel.com/introduction.html)**
- **[Redis](https://developer.redis.com/howtos/quick-start)**
