<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Enums\UserRole;
use App\Models\Post;

Route::get('/laravel-welcoma', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/test', function() {
    return view('test', ['title' => 'Test Page']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Posts Page', 'posts' => Post::all()]);
});

// mencari slug di dalam model post, karena secara default, kita akan cari nya berdasarkan id nya, bukan slug
Route::get('/post/{post:slug}', function(Post $post) {
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2316076836.
    return view('post', ['title' => 'Post Detail', 'post' => $post]);
    // ketika user memasukan parameter di route /post/bla bla bla, akan di cek dulu, pake REGEXP, apakah param nya itu huruf a-z? hika tidak, maka akan di redirect otomatis ke 404
});
// })->where('slug', '[A-Za-z]+');

Route::get('/category/{category}', function(string $category){
    return "Category yang kamu akses:  $category";
})->whereIn('category', ['web', 'mobile', 'api']);

// /user/ikhlasdantai/post/cara-makannya
Route::get('/users/{name}/posts/{slug:post}', function(string $name, string $slug){
    return "User $name, Post $slug";
});

Route::get('/user-role/{role}', function(string $role) {
    return "Role: $role";
})->whereIn('role', UserRole::values());


