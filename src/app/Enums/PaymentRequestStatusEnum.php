<?php

namespace App\Enums;

enum PaymentRequestStatusEnum: string
{
    case CONFIRMED = 'CONFIRMED';
    case REJECTED  = 'REJECTED';
    case NOT_CHECKED = 'NOT_CHECKED';


    public function toString()
    {
        return match($this)
        {
            self::CONFIRMED => 'تایید شده',
            self::REJECTED => 'رد شده',
            self::NOT_CHECKED => 'در انتظار بررسی'
        };
    }   



    public function colorClass()
    {
        return match($this)
        {
            self::CONFIRMED =>  'success',
            self::REJECTED => 'danger',
            self::NOT_CHECKED => 'warning'
        };
    }   


}