<?php
namespace App\Services;

use App\Models\User;
use App\Models\PaymentRequest;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class PaymentRequestService
{

    public function create(User $user, array $data)
    {
        $data = $this->uploadFile($data);
        return $user->payment_requests()->create($data);
    }




    public function update(PaymentRequest $paymentRequest, $data)
    {
        if( isset($data['appendix_file']) and $data['appendix_file'] instanceof File)
        { 
            $data = $this->uploadFile($data);
        }
        return $paymentRequest->update($data);
    }
    private function uploadFile($data)
    {
        $data['appendix_file'] = Storage::putFile('documents', $data['appendix_file']);
        
        return $data;
    }

}