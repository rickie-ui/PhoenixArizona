<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\User;

use Xcholars\Support\Proxies\Hash;

use Xcholars\Support\Proxies\Auth;

class ChangepasswordController extends Controller
{
    use \App\Traits\HasValidation;

    public function change(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'changepassword'))
        {
            return $error;
        }

        if (!Hash::check($request->currentPassword, Auth::user()->password))
        {
            return $response->withError('Current Password is invalid');
        }

        Auth::user()->update(['password' => Hash::make($request->password)]);

        return $response->withSuccess('Password changed Successfully');
    }
}
