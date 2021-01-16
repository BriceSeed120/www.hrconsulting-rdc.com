<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();           
            $table->text('address')->nullable();
            $table->string('room')->nullable();
            $table->string('adult')->nullable();
            $table->string('child')->nullable();
            $table->string('discount')->nullable();
            $table->string('startdate')->nullable();
            $table->string('endDate')->nullable();
            $table->double('amount')->nullable();
            $table->string('quantity')->nullable();
            $table->string('total_ammount')->nullable();
            $table->double('tax')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('additional_comment')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
