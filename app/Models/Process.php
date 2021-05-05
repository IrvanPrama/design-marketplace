<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;
    protected $table = 'process';
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
    ];
}
