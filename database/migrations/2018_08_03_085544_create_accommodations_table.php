<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acc_code');
            $table->string('name');
            $table->string('address');
            $table->string('zip')->nullable();
            $table->string('city');
            $table->integer('country_id')->unsigned();
            $table->integer('acc_type_id')->unsigned();
            $table->integer('rating_id')->unsigned();
            $table->integer('acc_details_id')->unsigned();
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
        Schema::dropIfExists('accommodations');
    }
}
