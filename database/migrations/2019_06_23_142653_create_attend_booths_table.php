<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendBoothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attend_booths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('expo_member_id')->unsigned();
            $table->foreign('expo_member_id')->references('id')->on('expo_members');
            $table->bigInteger('corporate_id')->unsigned();
            $table->foreign('corporate_id')->references('id')->on('corporates');
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
        Schema::dropIfExists('attend_booths');
    }
}
