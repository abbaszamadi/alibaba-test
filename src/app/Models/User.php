<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\PaymentRequest;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function payment_requests()
    {
        return $this->hasMany(PaymentRequest::class, 'creator_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function hasAccess(User $user, $action = '')
    {
        $actions = $user->role->actions->pluck('name');
 
        if ($actions)
        {
            if ( in_array($action, $actions->toArray()))
            {
                return true;
            }
        }

        return false;
    }

    public function hasLayoutAccess(User $user, $actions = [])
    {
        $actions = $user->role->actions->pluck('name');

        if ($actions)
        {
            if (array_intersect($actions->toArray(), $actions) )
            {
                return  true;
            }
        }
        return false;
    }


}
