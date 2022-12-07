<?php

namespace App\Http\Requests\PaymentRequests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PaymentRequests\StorePaymentRequest;

class UpdatePaymentRequest extends StorePaymentRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            'amount'    => ['sometimes', 'numeric', "min:1", 'max:9223372036854775807'],
            'status'    => 'sometimes', 'in:CONFIRMED,REJECTED,NOT_CHECKED',
            'appendix_file'      => ['sometimes', 'file', 'mimeTypes:application/pdf', 'nullable']
        ]);
    }
}
