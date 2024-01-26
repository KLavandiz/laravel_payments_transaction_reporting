<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_ip',
        'customer_user_agent',
        'merchant_ipp',
    ];

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'customerIp' => $this->customer_ip,
            'customerUserAgent' => $this->customer_user_agent,
            'merchantIpp' => $this->merchant_ipp,
        ];
    }

    protected $hidden = ['created_at', 'updated_at'];

}
