<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    protected $fillable = ['category_name'];

    public function books()
    {
        return $this->hasMany(books::class);
    }
}
