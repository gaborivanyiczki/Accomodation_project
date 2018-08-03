<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeysToAccommodations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accommodations', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('acc_type_id')->references('id')->on('accommodation_type')->onDelete('cascade');
            $table->foreign('rating_id')->references('id')->on('star_ratings')->onDelete('cascade');
            $table->foreign('acc_details_id')->references('id')->on('accommodation_details')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accommodations', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('acc_type_id')->references('id')->on('accommodation_type')->onDelete('cascade');
            $table->foreign('rating_id')->references('id')->on('star_ratings')->onDelete('cascade');
            $table->foreign('acc_details_id')->references('id')->on('accommodation_details')->onDelete('cascade');
        });
    }
}
