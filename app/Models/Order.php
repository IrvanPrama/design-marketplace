<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'designer_id',
        'avatar',
        'no_hp',
        'description',
        'example_img',
        'category',
        'budget',
        'deadline',
    ];
}
