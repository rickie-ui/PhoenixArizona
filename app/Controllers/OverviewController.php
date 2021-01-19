<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

class OverviewController
{
    public function show(Request $request, Response $response)
    {
        if (Gate::allows('show-admin'))
        {
            return $response->withView('admin/overview');
        }

        return $response->withView('client/overview');
    }
}
