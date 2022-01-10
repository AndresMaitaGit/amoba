<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('route_id');
            $table->integer('calendar_id');
            $table->string('vinculation_route', 100)->nullable();
            $table->integer('route_circular');
            $table->dateTime('date_init');
            $table->dateTime('date_finish');

            $table->integer('mon');
            $table->integer('tue');
            $table->integer('wed');
            $table->integer('thu');
            $table->integer('fri');
            $table->integer('sat');
            $table->integer('sun');

            $table->timestamps();
            // $table->foreign('route_id')->references('id')->on('routes');
            // $table->foreign('calendar_id')->references('id')->on('calendars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_datas');
    }
}
