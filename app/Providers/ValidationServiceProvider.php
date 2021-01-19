<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup'  => \App\Validation\ForSignup::class,
        'login'   => \App\Validation\ForLogin::class,
        "withdraw"=> \App\Validation\ForWithdraw::class,
        "deposit"=> \App\Validation\ForDeposit::class,
        "changepassword"=> \App\Validation\ForChangepassword::class,
        "sponsor"=> \App\Validation\ForSponsor::class,
        'sendmoney' => \App\Validation\ForSendMoney::class,
    ];
}
