<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeysToAccommodationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accommodation_details', function (Blueprint $table) {
            $table->foreign('characteristics_id')->references('id')->on('accommodation_characteristics')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accommodation_details', function (Blueprint $table) {
            $table->foreign('characteristics_id')->references('id')->on('accommodation_characteristics')->onDelete('cascade');

        });
    }
}
