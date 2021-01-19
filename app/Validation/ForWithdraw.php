<?php

Namespace App\Validation;

class ForWithdraw
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'amount' => 'greaterThanOrEqualTo:200',
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
            'greaterThanOrEqualTo' => 'Minimum withdrawal amount is Ksh.200',
        ];

        return  $messages[$rule] ?? $messages;
    }



}
