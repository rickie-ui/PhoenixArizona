<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use App\Models\Transaction;

class TransactionsController
{
    public function show(Request $request, Response $response)
    {
        $transactions = ['transactions' => Transaction::all()];

        if (Gate::allows('show-admin'))
        {
            return $response->withView('admin/updates', $transactions);
        }

        return $response->withView('client/transactions', $transactions);
    }
}
