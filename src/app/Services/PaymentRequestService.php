<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PaymentRequestService
{

    public function create(User $user, array $data)
    {
        $data = $this->uploadFile($data);
        return $user->payment_requests()->create($data);
    }



    private function uploadFile($data)
    {
        $data['appendix_file'] = Storage::putFile('payment_requests', $data['appendix_file']);
        
        return $data;
    }
}