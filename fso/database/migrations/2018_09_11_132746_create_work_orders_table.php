<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('wo_type_id');
            $table->unsignedInteger('wwms');
            $table->integer('mdf_id');
            $table->text('address');
            $table->text('client');
            $table->string('description');
            $table->integer('status_id');
            $table->integer('on_time')->default(0);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('call_type_id');
            $table->integer('invoice_id')->nullable();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
