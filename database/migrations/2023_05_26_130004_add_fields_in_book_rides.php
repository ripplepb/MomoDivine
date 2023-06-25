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
        Schema::table('book_rides', function (Blueprint $table) {
            $table->string('payment_req_id', 255)->after('total_price')->nullable();
            $table->string('transaction_id', 255)->after('payment_req_id')->nullable();
            $table->char('payment_status',1)->after('transaction_id')->comment('1:Pending 2:Completed 3:Failed')->default(1)->nullable();
            $table->char('total_payment_status',1)->after('payment_status')->comment('1:Pending 2:Completed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_rides', function (Blueprint $table) {
            //
        });
    }
};
