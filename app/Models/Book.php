<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;

class Book extends Model
{
    protected $fillable = [
        'book_name',
        'author',
        'published_date',
        'price',
    ];
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

}
