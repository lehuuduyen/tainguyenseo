<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->default(0)->comment('1: admin, 0: supplier');;
        });

        $password = "super_admin123@";
        DB::table('users')->insert(
            array(
                'username' => 'super_admin',
                'password' => bcrypt($password),
                'role' => 1,
                'sdt' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),

            )
        );
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
};
