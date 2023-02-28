<?php

use App\Services\MobileServices;

function generateVerifyCode($account , MobileServices $service)
{
    $code = random_int(000000 , 999999);

    $service->CrateVerifyCodeOnTable($account , $code);

}
