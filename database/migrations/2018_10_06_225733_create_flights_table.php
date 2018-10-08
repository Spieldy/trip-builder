<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('number');
            $table->integer('airline_id');
            $table->float('price', 7, 2);
            $table->integer('flight_departure_id');
            $table->integer('flight_arrival_id');
            $table->time('departure');
            $table->time('arrival');
            $table->timestamps();
        });
    }

    public function airport_departure()
    {
        return $this->belongsTo('App\Airport');
    }

    public function airport_arrival()
    {
        return $this->belongsTo('App\Airport');
    }

    public function airline()
    {
        return $this->belongsTo('App\Airline');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
