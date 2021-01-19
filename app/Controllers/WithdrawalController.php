<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

class WithdrawalController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if (Gate::allows('show-admin'))
        {
            return $response->withView('admin/withdrawals');
        }
    }

    public function withdraw(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'withdraw'))
        {
            return $error;
        }

        return $response->withSuccess('asserted');
    }

}
