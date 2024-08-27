<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
  public static function all()
  {
    return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Venomare',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ea consequuntur, pariatur iure, molestias accusantium repudiandae assumenda autem nemo, repellendus similique quibusdam hic expedita modi eum nam tenetur inventore est.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Venomare',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus esse unde minus voluptates, commodi obcaecati quae, deserunt, id quibusdam consequatur cum nemo mollitia aliquam illum quo iure praesentium magnam ad.'
        ],
    ];
  }

  public static function find($slug): array
  {
    // return Arr::first(static::all(), function($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    
    if(! $post){
      abort(404);
    }

    return $post;
  }

}