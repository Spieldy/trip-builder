<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iata', 3);
            $table->integer('city_id');
            $table->string('name', 255);
            $table->string('latitude', 255);
            $table->string('longitude', 255);
            $table->timestamps();
        });
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function flight_departures()
    {
        return $this->hasMany('App\Flight', 'flight_departure_id');
    }

    public function flight_arrivals()
    {
        return $this->hasMany('App\Flight', 'flight_arrival_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
