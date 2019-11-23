--install docker
https://hub.docker.com/search/?type=edition...
 --Install composer:
https://getcomposer.org/download/
-- Install Laravel
composer global require "laravel/installer=~1.1"

-- Hậu kiểm bằng hai lệnh dưới đây:
C:\Users\PC>composer -V
Composer version 1.9.1 2019-11-01 17:20:17
laravel -V
--Tao thu muc chua app vi du D:/TEN_BAN
cd D:/TEN_BAN
composer create-project laravel/laravel quickstart --prefer-dist # should have :quickstart folder created aka the laravel skeleton app
-- cd D:/TEN_BAN
cd quickstart
composer install

-- php artisan serve
hoặc
composer artisan serve
--all views defined under folder `resources/views/`
path under `resources/views/vvv.blade.php` is default to route handler method to render view `return view('vvv');`

-- php artisan make:controller TaskController
-- routes/web.php
Route::get('/tasks', 'TaskController@index');
app/Http/Controllers/TaskController.php
class TaskController extends Controller
{
public function index(){
return view("tasks");
}
}
tao view tasks tuong ung
 --resources/views/layout/master.blade.php
<div> @yield('content') </div>
resources/views/sub.blade.php
@extends('layout.master')
@section('content')
    <div>line 1</div>
@endsection
-- php artisan make:migration create_tasks_table --create=tasks
ref. https://laravel.com/docs/5.2/quickstart
-- php artisan migrate
-- php artisan make:model Task
--protected $table = "tasks";
-- pass model obj to view from controller
return view('tasks', […Xem thêm
-- get all tasks row
$tasks = Task::get();

