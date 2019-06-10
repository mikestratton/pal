<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersRowsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DB::table('users')->insert(array(
            'name' => 'Michael Stratton',
            'email' => 'mike@sunnytree.org',
            'password' => bcrypt('scraz5a*T*T'),
            'role_id' => '1'
        ));

        DB::table('users')->insert(array(
            'name' => 'Mike Sims',
            'email' => 'mikesims0816@gmail.com',
            'password' => bcrypt('PAL19@@@!!!'),
            'role_id' => '1'
        ));*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
