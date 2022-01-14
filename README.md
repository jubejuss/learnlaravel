# Learn Laravel.
** Instal with `composer create-project laravel/laravel example-app`
https://laravel.com/docs/8.x/installation#installation-via-composer

Kaspar file 03

01:59 database

## Start
Composer init
```php
Package name (<vendor>/<name>) [juhokalberg/learnlaravel]: 
Description []: 
Author [Juho Kalberg <juss@vilenkell.eu>, n to skip]: 
Minimum Stability []: 
Package Type (e.g. library, project, metapackage, composer-plugin) []: 
License []: 

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Add PSR-4 autoload mapping? Maps namespace "Juhokalberg\Learnlaravel" to the entered relative path. [src/, n to skip]: 
```
Kaspar file 04
30 minute

run `php artisan`
You can see different orders
Is good do study them

`php artisan serve`run dev  

06.mp4

`php artisan make:controller --help`

`php artisan make:controller HomeController`

first page in video in 00:22

Lets remove `welcome.blade.`from views

Add new PHP
`index.blade.php`
Layout:
@yield
In video 1:00

To made something we used HomeController.php, web.php, index.blade and layout.blade

Add bootstrap  

Database conf 01:56

Adding db to datagrip 02:13

07.mp4
Dealing with data

00:30 table commands

00:38 
make Article: `php artisan make:model -a Article`
modify articles micration
`php artisan migrate`
01:28 dump or dd
01:54 seeders  

Run seeder: `php artisan db:seed ArticleSeeder`
Study `php artisan db:seed`
`php artisan migrate:fresh`

`php artisan migrate:fresh --seed`

02:00 call all articles

08.mp4

Pagination  
`php artisan vendor:publish --tag=laravel-pagination`

in HomeController, instead of :
```php
public function articles()
    {
        $articles = Article::all();
        return view('articles', compact('articles'));
    }
```
Put:  
```php
public function articles()
    {
        $articles = Article::paginate();
        return view('articles', compact('articles'));
    }
```
01:25 more of pagination and logics  
01:30 query SQL logics  
02:01 db query builder
look laravel.com/docs/8.x/queries
02:15 shorten body in cards view
substr vs 

09.mpeg4
Article

15:24 use `Route::get('/', [HomeController::class, 'index']);`
instead of:
`Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);`
but the you need first add: `use App\Http\Controllers\HomeController;`
beginning of `web.php`  

10.mpeg4
go pack button
```php
href="{{ url()->previous() }}"
```





