<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('guard')->default('user')->comment('user, admin');
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('https://merics.org/sites/default/files/styles/ct_team_member_default/public/2020-04/avatar-placeholder.png?itok=Vhm0RCa3');
            $table->text('scocial_links')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
