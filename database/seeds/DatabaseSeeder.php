<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AirlineTableSeeder::class);
    }
}

class AirlineTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('airlines')->insert([
           'name' => 'Air Canada',
           'iata' => 'AC'
        ]);
        DB::table('airlines')->insert([
            'name' => 'Air France',
            'iata' => 'AF'
        ]);
        DB::table('cities')->insert([
           'name' => 'Vancouver',
           'iata' => 'YVR',
           'UTC' => -8
        ]);
        DB::table('cities')->insert([
            'name' => 'Montréal',
            'iata' => 'YMQ',
            'UTC' => -5
        ]);
        DB::table('cities')->insert([
            'name' => 'Paris',
            'iata' => 'PAR',
            'UTC' => 1
        ]);
        DB::table('airports')->insert([
            'iata' => 'YUL',
            'city_id' => 2,
            'name' => 'Pierre Elliott Trudeau International',
            'latitude' => '45.457714',
            'longitude' => '-73.749908'
        ]);
        DB::table('airports')->insert([
            'iata' => 'YVR',
            'city_id' => 1,
            'name' => 'Vancouver International',
            'latitude' => '49.194698',
            'longitude' => '-123.179192'
        ]);
        DB::table('airports')->insert([
            'iata' => 'CDG',
            'city_id' => 3,
            'name' => 'Charles De Gaulle',
            'latitude' => '49.0096906',
            'longitude' => '2.547924500000022'
        ]);
        DB::table('flights')->insert([
            'number' => 301,
            'airline_id' => 1,
            'price' => 220.63,
            'flight_departure_id' => 1,
            'flight_arrival_id' => 2,
            'departure' => '07:35:00',
            'arrival' => '10:05:00'
        ]);
        DB::table('flights')->insert([
            'number' => 302,
            'airline_id' => 1,
            'price' => 220.63,
            'flight_departure_id' => 2,
            'flight_arrival_id' => 1,
            'departure' => '07:35:00',
            'arrival' => '10:05:00'
        ]);
    }
}
