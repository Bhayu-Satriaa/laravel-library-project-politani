<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'book';

    protected $fillable = [
        'category_id',
        'title',
        'author',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function loans()
    {
        return $this->hasMany(loans::class, 'book_id');
    }
}
