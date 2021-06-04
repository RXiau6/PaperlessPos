<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->string('uuid')->unique();
            $table->String('seller_id',15)->nullable(false);
            $table->String('title',20)->nullable(false);
            $table->String('detail',10)->nullable();
            $table->string('carrier', 10)->nullable();
            $table->dateTime('expired_date')->nullable(false);
            $table->boolean('used');
            $table->timestamps();
            
            $table->foreign('carrier')->references('carrier')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
