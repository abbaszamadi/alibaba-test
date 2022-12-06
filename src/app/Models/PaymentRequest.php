<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class PaymentRequest extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'status', 'appendix_file', 'user_id', 'creator_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');

    }


    public function getAppendixUrlAttribute()
    {
        //return Storage::url($this->appendix_file);
        return Storage::path($this->appendix_file);

    }


}
