<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password'
        // add all other fields
    ];

    use HasFactory;
}
