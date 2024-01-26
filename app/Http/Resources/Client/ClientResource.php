<?php

namespace App\Http\Resources\Client;

use App\DTO\ClientDTO;
use App\Http\Resources\BaseCollection;

class ClientResource extends BaseCollection
{

    protected string $collectionClass = ClientDTO::class;

    public function toArray($collect): array
    {
        return [
            'id' => $collect->id,
            'number' => $collect->number,
            'expiryMonth' => $collect->expiry_month,
            'expiryYear' => $collect->expiry_year,
            'startMonth' => $collect->start_month,
            'startYear' => $collect->start_year,
            'issueNumber' => $collect->issue_number,
            'email' => $collect->email,
            'birthday' => $collect->birthday,
            'gender' => $collect->gender,
            'billingTitle' => $collect->billing_title,
            'billingFirstName' => $collect->billing_firstName,
            'billingLastName' => $collect->billing_lastName,
            'billingCompany' => $collect->billing_company,
            'billingAddress1' => $collect->billing_address1,
            'billingAddress2' => $collect->billing_address2,
            'billingCity' => $collect->billing_city,
            'billingPostcode' => $collect->billing_postcode,
            'billingState' => $collect->billing_state,
            'billingCountry' => $collect->billing_country,
            'billingPhone' => $collect->billing_phone,
            'billingFax' => $collect->billing_fax,
            'shippingTitle' => $collect->shipping_title,
            'shippingFirstName' => $collect->shipping_firstName,
            'shippingCompany' => $collect->shipping_company,
            'shippingAddress1' => $collect->shipping_address1,
            'shippingAddress2' => $collect->shipping_address2,
            'shippingCity' => $collect->shipping_city,
            'shippingPostcode' => $collect->shipping_postcode,
            'shippingState' => $collect->shipping_state,
            'shippingCountry' => $collect->shipping_country,
            'shippingPhone' => $collect->shipping_phone,
            'shippingFax' => $collect->shipping_fax,
            'deletedAt' => $collect->deleted_at,

        ];
    }

    public function add(ClientDTO $listDTO): void
    {
        $this->push($listDTO);

    }
}
