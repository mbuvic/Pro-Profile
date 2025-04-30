<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProfilesObserver
{

    public function creating(Model $model)
    {
        if ($user = Auth::user()) {
            $model->user()->associate($user);
        }
    }

    //for updating
    public function updating(Model $model)
    {
        if ($user = Auth::user()) {
            $model->user()->associate($user);
        }
    }
}
