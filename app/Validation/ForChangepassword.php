<?php

Namespace App\Validation;

use Xcholars\Support\Proxies\Auth;

class ForChangepassword
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'currentPassword' => 'required',
            'password' => 'required|min:6',
            'confirmPassword' => 'match:password',
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
