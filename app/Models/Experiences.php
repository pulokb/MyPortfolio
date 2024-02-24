<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    protected $fillable = [

        'start_date',
        'ends_on',
        'company',
        'title',
        'details',
        'image'
    ];
}
