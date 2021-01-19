<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateTransactionsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table)
        {
            $table->id();

            $table->string('user_id');

            $table->integer('activity');

            $table->integer('amount');

            $table->integer('status');

            $table->timestamps();
        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('transactions');
    }
}
