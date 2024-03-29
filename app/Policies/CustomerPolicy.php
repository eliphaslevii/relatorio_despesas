<?php

namespace App\Policies;

use App\Customer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function __construct(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    public function viewAny(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function view(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function restore(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        return in_array($user->isadmin,[
            'Yes',
            'Financeiro',
        ]);
    }
}
