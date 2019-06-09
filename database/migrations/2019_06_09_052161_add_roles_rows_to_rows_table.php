<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolesRowsToRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->insert(array(
            'name' => 'Admin',
        ));

        DB::table('roles')->insert(array(
            'name' => 'Creator',
        ));

        DB::table('roles')->insert(array(
            'name' => 'Subscriber',
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rows', function (Blueprint $table) {
            //
        });
    }
}
