<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Done extends Model
{
    use HasFactory;
    protected $table = 'done';
    protected $fillable = [
        'user_id',
        'title_design',
        'name',
        'email',
        'designer_id',
        'design_id',
        'avatar',
        'description',
        'budget',
        'deadline',
        'image1',
        'image2',
        'image3',
    ];
}
