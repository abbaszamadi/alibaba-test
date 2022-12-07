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
            'amount'    => ['required', 'numeric', "min:1", 'max:9223372036854775807'],
            'appendix_file'      => ['required', 'file', 'mimetypes:application/pdf', 'between:1,10240']
        ];
    }


    public function messages()
    {
        return [
            'appendix_file.*' => 'فایل آپلود شده معتبر نیست'
        ];
    }

    
    public function prepareForValidation()
    {
        $this->merge([
            'amount'  => $this->num2en($this->amount)
        ]);
    }

    private function num2en($number)
    {
        $persian_num = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $arabic_num  = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
        for($i=0;$i<10;$i++){
            $number = str_replace($persian_num[$i], $i, $number);
        }
        for($i=0;$i<10;$i++){
            $number = str_replace($arabic_num[$i], $i, $number);
        }
        return $number;
    }
}
