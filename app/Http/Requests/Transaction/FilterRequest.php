<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fromDate' => 'nullable|date',
            'toDate' => 'nullable|date',
            'status' => 'nullable|string',
            'operation' => 'nullable|string',
            'merchantId' => 'nullable|string',
            'acquirerId' => 'nullable|string',
            'errorCode' => 'nullable|string',
            'filterField' => 'nullable',
            'filterValue' => 'required_if_accepted:filterField'
        ];
    }

    public function messages(): array
    {

        return [
            'fromDate.date' => __('transaction.fromDate'),
            'toDate.date' => __('transaction.toDate'),
            'status.string' => __('transaction.status'),
            'operation.string' => __('transaction.operation'),
            'merchantId.string' => __('transaction.merchantId'),
            'acquirerId.string' => __('transaction.acquirerId'),
            'errorCode.string' => __('transaction.errorCode'),
            'filterValue.required' => __('transaction.filterValue')
        ];
    }
}
