<?php


namespace App\Services;

use App\Models\VerifyCode;

class MobileServices {

    public function CreateVerifyCodeOnTable($account , $code)
    {
        $account->verifyCode;
    }

}
