<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $fillable = [
        'class_id', 'section_name'
    ];

    public static function findOrFail(int $id)
    {
    }
}
