<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';

    protected $primaryKey = 'student_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'student_id',
        'address',
        'phone_numbers',
    ];

    public function loans()
    {
        return $this->hasMany(loans::class, 'student_id');
    }
}
