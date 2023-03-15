@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">Reservation</h3>

    <div class="float-right">
        <a href="{{ route('reservations.create') }}" class="btn btn-primary enter-multi-payment">
            <i class="fa fa-credit-card"></i> Create Reservation
        </a>
    </div>
    <div class="clearfix"></div>
</section>
<section class="content">
    @include('layouts._alerts')
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <label>Hotel :</label>
                <input type="text" name="hotel" class="form-control">
                <br>
                <label>Name :</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>Email :</label>
                <input type="email" name="email" class="form-control">
                <br>
                <label>Start Time :</label>
                <input type="datetime-local" name="start_time" class="form-control">
                <br>
                <label>End Time :</label>
                <input type="datetime-local" name="end_time" class="form-control">
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Create Reservation</button>
            </form>
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">Back to List</a>
                </div>
        </div>
    </div>
</section>
@stop