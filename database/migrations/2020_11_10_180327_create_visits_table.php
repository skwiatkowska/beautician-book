<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empl_id');
            $table->unsignedInteger('cust_id');
            $table->unsignedInteger('treat_id');
            $table->date('day');
            $table->string('time');
            $table->timestamps();
            
            $table->foreign('empl_id')->references('id')->on('employees');
            $table->foreign('cust_id')->references('id')->on('customers');
            $table->foreign('treat_id')->references('id')->on('treatments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
