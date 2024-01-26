<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'expiry_month',
        'expiry_year',
        'start_month',
        'start_year',
        'issue_number',
        'email',
        'birthday',
        'gender',
        'billing_title',
        'billing_firstName',
        'billing_lastName',
        'billing_company',
        'billing_address1',
        'billing_address2',
        'billing_city',
        'billing_postcode',
        'billing_state',
        'billing_country',
        'billing_phone',
        'billing_fax',
        'shipping_title',
        'shipping_firstName',
        'shipping_company',
        'shipping_address1',
        'shipping_address2',
        'shipping_city',
        'shipping_postcode',
        'shipping_state',
        'shipping_country',
        'shipping_phone',
        'shipping_fax',
        'deleted_at',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'expiryMonth' => $this->expiry_month,
            'expiryYear' => $this->expiry_year,
            'startMonth' => $this->start_month,
            'startYear' => $this->start_year,
            'issueNumber' => $this->issue_number,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'billingTitle' => $this->billing_title,
            'billingFirstName' => $this->billing_firstName,
            'billingLastName' => $this->billing_lastName,
            'billingCompany' => $this->billing_company,
            'billingAddress1' => $this->billing_address1,
            'billingAddress2' => $this->billing_address2,
            'billingCity' => $this->billing_city,
            'billingPostcode' => $this->billing_postcode,
            'billingState' => $this->billing_state,
            'billingCountry' => $this->billing_country,
            'billingPhone' => $this->billing_phone,
            'billingFax' => $this->billing_fax,
            'shippingTitle' => $this->shipping_title,
            'shippingFirstName' => $this->shipping_firstName,
            'shippingCompany' => $this->shipping_company,
            'shippingAddress1' => $this->shipping_address1,
            'shippingAddress2' => $this->shipping_address2,
            'shippingCity' => $this->shipping_city,
            'shippingPostcode' => $this->shipping_postcode,
            'shippingState' => $this->shipping_state,
            'shippingCountry' => $this->shipping_country,
            'shippingPhone' => $this->shipping_phone,
            'shippingFax' => $this->shipping_fax,
            'deletedAt' => $this->deleted_at,
        ];
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'id');
    }

    public function scopeClientByTransactionId($query, string $transactionId)
    {

        return $query->whereHas('transaction', function ($query) use ($transactionId) {
            $query->where('transaction_id', $transactionId);
        });
    }

}
