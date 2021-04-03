<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'title',
        'description',
        'design1',
        'design2',
        'design3',
        'avatar'
    ];
}
