<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Publisher extends Model
{
    protected $fillable = [
        'name',
        'name_kana',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
