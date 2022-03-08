<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'description',
        'publication_year',
    ];

    public function author()
    {
        return $this->hasManyThrough(Author::class, AuthorBook::class, 'book_id', 'id', 'id', 'author_id');
    }
}
