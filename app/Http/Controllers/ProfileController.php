<?php

namespace App\Http\Controllers;

use App\Models\BusinessProfile;
use App\Models\IndividualProfile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showBusinessProfile($username)
    {
        $profile = BusinessProfile::where('username', $username)
            ->where('is_active', true)
            ->first();

        if (!$profile) {
            return view('profiles.not-found', [
                'type' => 'business',
                'username' => $username
            ]);
        }

        return view('profiles.business', [
            'profile' => $profile
        ]);
    }

    public function showIndividualProfile($username)
    {
        $profile = IndividualProfile::where('username', $username)
            ->where('is_active', true)
            ->first();

        if (!$profile) {
            return view('profiles.not-found', [
                'type' => 'individual',
                'username' => $username
            ]);
        }

        return view('profiles.individual', [
            'profile' => $profile
        ]);
    }
} 