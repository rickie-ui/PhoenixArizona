<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

class NetworksController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView('client/network');
    }
}
