<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignExchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_amount',
        'original_currency',
    ];

    protected $hidden = ['created_at','updated_at'];

    public function toArray():array
    {
        return [
            'originalAmount'=>$this->original_amount,
            'originalCurrency'=>$this->original_currency
        ];
    }
}
