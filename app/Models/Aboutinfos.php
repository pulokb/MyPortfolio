<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutinfos extends Model
{
    use HasFactory;
    protected $fillable = [
    'age',
    'born',
    'email',
    'phone'
    ];

}
