@extends('layouts.master')

@section('content')
    <section class="content-header">
        <h3 class="float-left">Reservation</h3>

        <div class="float-right">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">
               <i class="fa fa-credit-card"></i> Create Reservation
            </a>
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="content">
        @include('layouts._alerts')
        <div class="card ">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Hotel</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Reserved</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr scope="row">
                                <td>{{ $reservation->hotel }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->start_time }}</td>
                                <td>{{ $reservation->end_time }}</td>
                                <td>
                                    @if($reservation->used == 1) Reserved @endif
                                    @if($reservation->used == 0) Free @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop
