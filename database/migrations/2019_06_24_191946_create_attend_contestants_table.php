<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attend_contestants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('expo_member_id')->unsigned();
            $table->foreign('expo_member_id')->references('id')->on('expo_members');
            $table->bigInteger('contestant_id')->unsigned();
            $table->foreign('contestant_id')->references('id')->on('contestants');
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
        Schema::dropIfExists('attend_contestants');
    }
}
