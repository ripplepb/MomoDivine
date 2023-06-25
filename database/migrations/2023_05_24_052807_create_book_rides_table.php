<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_rides', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('location', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->string('time', 255)->nullable();
            $table->double('price', 8,2)->nullable();
            $table->char('ride_type', 1)->comment('1:Airport to Destination, 2:Destination to Airport')->nullable();
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
        Schema::dropIfExists('book_rides');
    }
};
