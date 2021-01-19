<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateRewardsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table)
        {
            $table->id();

            $table->string('user_id');

            $table->string('type');

            $table->integer('amount');

            $table->string('status')->default('pending');

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
        Schema::drop('rewards');
    }
}
