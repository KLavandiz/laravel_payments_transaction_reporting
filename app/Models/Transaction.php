<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_no',
        'merchant_id',
        'status',
        'channel',
        'custom_data',
        'chain_id',
        'agent_info_id',
        'operation',
        'fx_transaction_id',
        'acquirer_transaction_id',
        'code',
        'message',
        'transaction_id',
        'refundable',
        'client_id'

    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function acquirer(): HasOne
    {
        return $this->hasOne(Acquirer::class, 'id', 'acquirer_transaction_id');
    }

    public function agent(): HasOne
    {
        return $this->hasOne(Agent::class, 'id', 'agent_info_id');
    }

    public function client(): HasOne
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function fx(): HasOne
    {
        return $this->hasOne(ForeignExchange::class, 'id', 'fx_transaction_id');

    }




    public function merchant(): HasOne
    {
        return $this->hasOne(Merchant::class, 'id', 'merchant_id');
    }


}
