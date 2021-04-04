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
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('company_name')->nullable();
            $table->string('username')->nullable();
//            $table->string('city')->nullable();
//            $table->string('state')->nullable();
            $table->string('cninc')->nullable();
            $table->string('dob')->nullable();

            $table->string('state')->nullable();
            $table->text('profile_picture')->nullable();
            $table->string('email')->unique();
//            $table->string('time_zone')->nullable();
//            $table->string('language')->nullable();
//            $table->enum('communication_by',['email','sms','password'])->nullable();
            $table->string('timeSlot')->nullable();
//            $table->string('timeSlot_2')->nullable();
            $table->string('timeSlot_3')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('parent_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
