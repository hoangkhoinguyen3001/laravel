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
--(env or make mistake : homestead go database.php file )
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nguyen1
DB_USERNAME=root
DB_PASSWORD=
-- homestead
'database' =>'nguyen' //env('DB_DATABASE', 'forge'),
'username' =>'root' //env('DB_USERNAME', 'forge'),
'password' =>'' //env('DB_PASSWORD', ''),
-- php artisan make:migration create_tasks_table --create=tasks
ref. https://laravel.com/docs/5.2/quickstart
-- php artisan migrate
-- php artisan make:model Task
--protected $table = "tasks";
-- pass model obj to view from controller
return view('tasks', […Xem thêm
-- get all tasks row
$tasks = Task::get();
--create database to work to api
DROP TABLE IF EXISTS customers;
CREATE TABLE customers(
id serial PRIMARY KEY,
name text,
dob date,
updated_at timestamp
);
INSERT INTO customers
(name, dob, updated_at)
VALUES
('Name01', '2018-01-02', '2019-08-12 04:05:01'),
('Name02', '2018-02-03', '2019-08-13 05:06:01'),
('Name03', '2018-03-04', '2019-08-14 06:07:01'),
('Name04', '2018-04-05', '2019-08-15 07:08:01'),
('Name05', '2018-05-06', '2019-08-16 08:09:01');
--php artisan make:controller CustomerController
-- php artisan make:model Customer
--return response()->json($c_all, 200);


