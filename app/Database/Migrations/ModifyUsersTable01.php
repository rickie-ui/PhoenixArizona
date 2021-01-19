<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class ModifyUsersTable01
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('sponsor_username')->after('type');

             $table->renameColumn('fullName', 'username', 'varchar(255)');

        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {

    }
}
