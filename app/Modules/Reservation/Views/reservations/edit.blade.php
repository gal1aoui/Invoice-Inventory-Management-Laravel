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
            <form action="{{ route('reservations.update', $reservation->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <label>Hotel:</label>
                <input type="text" name="hotel" class="form-control" value="{{ $reservation->hotel }}">
                <br>
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $reservation->name }}">
                <br>
                <label>Status:</label>
                <select class="form-control" name="used">
                    <option value="1" @if($reservation->used == 1) selected @endif> Reserved</option>
                    <option value="0" @if($reservation->used == 0) selected @endif> Free</option>
                </select>
                <br>
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $reservation->email }}">
                <br>
                <label>Start Time:</label>
                <input type="datetime-local" name="start_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($reservation->start_time)) }}">
                <br>
                <label>End Time:</label>
                <input type="datetime-local" name="end_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($reservation->end_time)) }}">
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Update Reservation</button>
            </form>
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">Back to List</a>
                </div>
        </div>
    </div>
</section>
@stop