<?php

/**
 * This file is part of BillingTrack.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BT\Modules\Rooms\Controllers;

use BT\DataTables\RoomsDataTable;
use BT\Http\Controllers\Controller;
use BT\Modules\Rooms\Models\Room;
use BT\Modules\Rooms\Requests\RoomRequest;
use Request;

class RoomController extends Controller
{
    public function index(RoomsDataTable $dataTable)
    {
        $rooms = Room::all();
        return $dataTable->render('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(RoomRequest $request)
    {
        Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    public function edit(Room $room)
    {
        $num = 0;
        $num = $room->adults_number + $room->kids_number;
        return view('rooms.edit', compact('room', 'num'));
    }

    public function update(RoomRequest $request, Room $room)
    {
        $room->update($request->all());
        return redirect()->route('rooms.index');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect(url()->current());
    }


}
