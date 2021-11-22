<?php

namespace App\Services;

use App\Models\Profile;
use App\Models\User;

class UserServices
{
    public function updatePublicInfo($request)
    {
        $user = User::with('profile')->where('username', $request->username);

        $user->update([
            'name' => $request->name,
            'avatar' => $request->avatar,
        ]);

        if (empty($user->profile)) {
            $profile = Profile::create([
                'user_id' => $user->first()->id,
                'bio' => $request->bio
            ]);
            return true;
        }

        $user->profile->update(['bio' => $request->bio]);

        return true;
    }

    public function updatePrivateInfo($request)
    {
        $user = User::with('profile')->where('username', $request->username)->first();

        if (empty($user->profile)) {
            $profile = Profile::create([
                'user_id' => $user->first()->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile'=>$request->mobile,
                'address' => $request->address,
            ]);
            return true;
        }


        $user->profile->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile'=>$request->mobile,
            'address' => $request->address,
        ]);

        return true;
    }
}
