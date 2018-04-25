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
            $table->text('name',60);
            $table->text('location',255);
            $table->text('registration_date');
            $table->text('license_number',7);
            $table->text('branch_owner',100);
            $table->text('contact_number',7);
            $table->text('email_address',255);
            $table->text('facebook_link',255);
            $table->text('photo',255);
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
