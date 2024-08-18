<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function store(Request $request) {

        $ticket = new Ticket();
        $ticket->flight_id = $request->input('flight_id');
        $ticket->category_id = $request->input('category_id');
        $ticket->user_id = Auth::user()->getAuthIdentifier();
        $ticket->passenger_name = $request->input('passenger_name');
        $ticket->passenger_lastname = $request->input('passenger_lastname');
        $ticket->seat_number = $request->input('seat_number');

        $ticket->save();

        return response()->json([
            'message' => 'OK',
            'ticket' => $ticket
        ]);
    }

    public function getTickets(Request $request) {

        $tickets = Ticket::where('user_id', Auth::user()->getAuthIdentifier())->get();

        $ticketsResponse = [];
        foreach ($tickets as $ticket) {
            $ticketsResponse[] = [
                'id' => $ticket->id,
                'seat' => $ticket->seat_number,
                'flight' => $ticket->flight,
                'clase' => $ticket->category->name,
                'destination' => $ticket->flight->city,
                'airline' => $ticket->flight->airline,
            ];
        }

        return response()->json([
            'message' => 'OK',
            'tickets' => $ticketsResponse
        ]);
    }
}
