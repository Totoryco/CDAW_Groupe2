<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Facades\Auth;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'firstname' => ['nullable', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id)
            ],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'pseudo' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
        ])->validate();

        echo($user->id);
        if (($user->id == Auth::user()->id) ) {
            echo($user->id);
            $this->updateVerifiedUser($user, $input);
            echo($user->id);
       }
        //return view('profile');
    }

    public function updateForm(){
        return view('updateprofile');
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'pseudo' => $input['pseudo'],
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'location' => $input['location'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
