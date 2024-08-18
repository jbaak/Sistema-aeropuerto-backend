<?php

namespace App\Http\Controllers;

use App\Filters\FlightFilter;
use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
use DateTime;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function getFlights(Request $request, FlightFilter $flightFilter) {

        $query = Flight::filter($flightFilter);
        $flights = $query->get();

        $vuelos = [];
        $currentDate = new DateTime();
        $allowBuy = true;
        foreach ($flights as $flight) {

            $hora =  date("d-m-Y H:i:s",strtotime($flight->date."- 3 hour"));
            $horaParaApartar = new DateTime($hora);

            if ($horaParaApartar <= $currentDate) {
                $allowBuy = false;
            }

            $vuelos[] = [
                'id' => $flight->id,
                'date' => $flight->date,
                'allowBuy' => $allowBuy,
                'destination' => $flight->city,
                'airline' => $flight->airline,
                'duration_hour' => $flight->duration_hour,
                'duration_min' => $flight->duration_minute,
                'basic_price' => $flight->basic_price,
                'categories' => $flight->categories,
            ];
        }

        return response()->json([
            'message' => 'OK',
            'flights' => $vuelos
        ]);
    }

    public function getCities() {
        $cities = City::all();

        return response()->json([
            'cities' => $cities
        ]);
    }

    public function getAirlines() {
        $airlines = Airline::all();

        return response()->json([
            'airlines' => $airlines
        ]);
    }


}
