<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquirer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'type',
    ];


    protected $hidden = ['created_at','updated_at'];

}
