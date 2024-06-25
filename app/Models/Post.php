<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Akan diubah menjadi non-singular ketika di migration
class Post extends Model {
    use HasFactory;

    protected $fillable = ['title', 'author', 'body', 'slug'];
}



// tutor sebelumnya
// public static function find($slug): array {
// // 2. maka dari itu, kita gunakan use (apa gitu) buat passing parameter slugnya, dia akan ngecek di global nya, ada gak variabel $slug;
//     $post = Arr::first(static::all(), function($post) use ($slug) {
//   // 1. kita gak bisa langsung dapetin value parameter url slug disini, karena blok scope
//       return $post['slug'] === $slug;
//   });
//     if (!$post) abort(404);
//     return $post;
//     // atau kalo mau pake anonymous function, supaya gak perlu bingung sama lexcal scope nya
//     // fn itu function
//     // return Arr::first(static::all(), fn($post) => $post['slug'] === $slug);
// }