<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'pic',
        'author_id',
        'genre_id',
        'publisher_id',
        'category_id',
        'amount'
    ];

    public function author()
    {
        $this->belongsTo(Author::class);
    }
    public function genre()
    {
        $this->belongsTo(Genre::class);
    }
    public function publisher()
    {
        $this->belongsTo(Publisher::class);
    }
    public function category()
    {
        $this->belongsTo(Category::class);
    }
    public function reviews()
    {
        $this->belongsTo(Review::class);
    }
    public function tags()
    {
        $this->hasManyThrough(Tag::class, BookTag::class);
    }
}
