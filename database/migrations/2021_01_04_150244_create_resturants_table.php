<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id');
            $table->longText('description')->nullable();
            $table->string('property_label')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('property_list')->nullable();
            $table->longText('gallery')->nullable();
            $table->string('rate_in_bdt')->nullable();
            $table->string('rate_in_usd')->nullable();
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
        Schema::dropIfExists('resturants');
    }
}
