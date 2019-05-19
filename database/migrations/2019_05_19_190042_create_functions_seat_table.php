<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsSeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions_seat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('seat');

            $table->unsignedBigInteger('function_id')->nullable();
            $table->foreign('function_id')->references('id')->on('functions')->onDelte('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functions_seat');
    }
}
