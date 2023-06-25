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
        Schema::table('book_hourlies', function (Blueprint $table) {
            $table->string('pending_price', 255)->after('date')->nullable();
            $table->string('paid_price', 255)->after('pending_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_hourlies', function (Blueprint $table) {
            //
        });
    }
};
