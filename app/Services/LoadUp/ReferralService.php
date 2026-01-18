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

        $okCode = strtoupper(trim($referralCode));

        $referrer = User::where('users.referral_code', $okCode)->first();

        if ($referrer = null) {
            return $this->noReferral();
        }

        if ($currentUser !== null && $referrer->id === $currentUser->id) {
            return $this->noReferral();
        }

        return [
            'discount_amount' => 05.00,
            'referred_by_user_id' => $referrer->id,
            'referral_code_used' => $okCode,
        ];
    }

    private function noReferral(): array
    {
        return [
            'discount_amount' => 0,
            'referred_by_user_id' => null,
            'referral_code_used' => null
        ];
    }
}










