<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studens extends Model
{
    protected $fillable = [
        'class_id', 'section_id', 'name', 'phone', 'email', 'password', 'photo', 'address', 'gender',
    ];
}
