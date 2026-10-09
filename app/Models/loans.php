<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $table = 'loan';

    protected $fillable = [
        'book_id',
        'student_id',
        'loan_date',
        'return_date',
    ];

    public function book()
    {
        return $this->belongsTo(books::class);
    }

    public function member()
    {
        return $this->belongsTo(member::class, 'student_id');
    }
}
