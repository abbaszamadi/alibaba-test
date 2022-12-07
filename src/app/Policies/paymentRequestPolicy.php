<?php

namespace App\Policies;

use App\Models\PaymentRequest;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class paymentRequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PaymentRequest $paymentRequest)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PaymentRequest $paymentRequest)
    {
        return ($user->hasAccess($user, 'payment_request_update') &&
            $paymentRequest->status == 'NOT_CHECKED');
    }


    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PaymentRequest $paymentRequest)
    {
        return $user->hasAccess($user, 'payment_request_soft_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PaymentRequest $paymentRequest)
    {
        return $user->hasAccess($user, 'payment_request_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PaymentRequest $paymentRequest)
    {
        return $user->hasAccess($user, 'payment_request_hard_delete');
    }
}
