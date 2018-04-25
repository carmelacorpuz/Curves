<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('location',255);
            $table->date('registration_date');
            $table->string('license_number',7);
            $table->string('branch_owner',100);
            $table->string('contact_number',7);
            $table->string('email_address',255);
            $table->string('facebook_link',255)->nullable();
            $table->text('photo',255)->nullable();
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
        Schema::dropIfExists('branches');
    }
}
