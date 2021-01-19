<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;


class ProfileController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView('client/profile', ['user'=> Auth::user()]);
    }
}
