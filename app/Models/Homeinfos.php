<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeinfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'image',
        'email',
        'address'

    ];
}
