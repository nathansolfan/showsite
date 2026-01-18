<?php

namespace App\Services;

use App\Models\User;

class ReferralService
{
    public function applyReferral(string $referralCode, User $currentUser = null): array
    {
        if ($referralCode === '') {
            return $this->noReferral();
        }

//        if (!$referralCode) {
//            return $this->noReferral();
//        }


    }

}
