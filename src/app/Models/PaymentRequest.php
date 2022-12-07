<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Enums\PaymentRequestStatusEnums;


class PaymentRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['amount', 'status', 'appendix_file', 'user_id', 'creator_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');

    }


    public function getStatusTitleAttribute()
    {
        return [
            'CONFIRMED' => 'تایید شده',
            'REJECTED'  => 'رد شده',
            'NOT_CHECKED'   => 'در انتظار بررسی'
        ][$this->status];
    }


    public function getAppendixUrlAttribute()
    {
        return Storage::url($this->appendix_file);

    }


}
