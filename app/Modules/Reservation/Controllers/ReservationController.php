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
use Request;

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
