<?php

Namespace App\Validation;

class ForDeposit
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'phone' => 'required',
            'amount' => 'required',
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
