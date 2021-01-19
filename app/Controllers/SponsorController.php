<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;


class SponsorController extends Controller
{
    use \App\Traits\HasValidation;

    public function pay(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'sponsor'))
        {
            return $error;
        }
        return "Hello";

    }

}
