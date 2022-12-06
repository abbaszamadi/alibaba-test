<?php

namespace App\Http\Requests\PaymentRequests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'amount'    => ['required', 'numeric'],
            'appendix_file'      => ['required', 'file', 'mimetypes:application/pdf']
        ];
    }


    public function messages()
    {
        return [
            'appendix_file.*' => 'فایل آپلود شده معتبر نیست'
        ];
    }

}
