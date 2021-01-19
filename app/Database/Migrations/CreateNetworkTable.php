<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateNetworkTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->integer('package_id');

            $table->integer('sponsor_id');

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
        Schema::drop('networks');
    }
}
