<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

class SendMoneyController extends Controller
{
    use \App\Traits\HasValidation;

    public function pay(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'sendmoney'))
        {
            return $error;
        }

        return "Hello";
    }

}
