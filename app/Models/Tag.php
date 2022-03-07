<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'pic'
    ];

    public function books() {
        return $this->hasManyThrough(Book::class, BookTag::class);
    }
}
