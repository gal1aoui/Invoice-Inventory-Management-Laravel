<?php

/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Reservation\Controllers;

use BT\DataTables\ReservationsDataTable;
use BT\Modules\Reservation\Models\Reservation;
use BT\Http\Controllers\Controller;
use BT\Modules\Reservation\Requests\ReservationRequest;
use BT\Modules\Rooms\Models\Room;

class ReservationController extends Controller
{
    public function index(ReservationsDataTable $dataTable)
    {
        $reservations = Reservation::all();
        return $dataTable->render('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(ReservationRequest $request)
    {
        Reservation::create($request->all());
        $roomsData = $request->input('rooms');
        $clientId = $request->input('client_id');
        $rooms = collect($roomsData)->map(function($data) use ($clientId){
           return [
               'client_id' => $clientId,
               'name' => "Room ID : ".strval($clientId),
               'purchase_price' => $data['purchase_price'],
               'selling_price' => $data['selling_price'],
               'adults_number' => $data['adults_number'],
               'kids_number' => $data['kids_number'],
               'number' => intval($data['adults_number']) + intval($data['kids_number']),
               'type' => $data['type'],
               'room_formula' => $data['room_formula']
           ];
        })->toArray();

        Room::insert($rooms);
        return redirect()->route('reservations.index');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }


}
