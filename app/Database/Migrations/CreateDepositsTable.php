<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateDepositsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table)
        {
            $table->id();

            $table->string('user_id');

            $table->integer('amount');

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
        Schema::drop('deposits');
    }
}
