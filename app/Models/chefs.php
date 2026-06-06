<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class chefs extends Model
{
    use HasFactory;
    protected $table = 'chefs';

    protected $fillable = [
        'users_id',
        'name',
        'speciality',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

