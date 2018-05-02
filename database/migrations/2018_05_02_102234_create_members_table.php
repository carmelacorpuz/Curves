<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('keytag_id');
            $table->integer('age');
            $table->string('nickname',50);
            $table->string('first_name',60);
            $table->string('middle_initial',1);
            $table->string('last_name',60);
            $table->date('birthdate');
            $table->string('address',255);
            $table->string('marital_status',20);
            $table->integer('landline');
            $table->string('occupation',255);
            $table->string('mobile_number');
            $table->string('email_address',255);
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
        Schema::dropIfExists('members');
    }
}
