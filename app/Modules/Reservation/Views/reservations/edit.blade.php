@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">@lang('bt.reservation')</h3>

    <div class="float-right">
        <a href="{{ route('reservations.create') }}" class="btn btn-primary">
            <i class="fa fa-credit-card"></i>@lang('bt.create_reservation')
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
                <label>@lang('bt.hotel'):</label>
                <input type="text" name="hotel" class="form-control" value="{{ $reservation->hotel }}">
                <br>
                <label>@lang('bt.name'):</label>
                <input type="text" name="name" class="form-control" value="{{ $reservation->name }}">
                <br>
                <label>@lang('bt.email'):</label>
                <input type="email" name="email" class="form-control" value="{{ $reservation->email }}">
                <br>
                <label>@lang('bt.start_time'):</label>
                <input type="datetime-local" name="start_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($reservation->start_time)) }}">
                <br>
                <label>@lang('bt.end_time'):</label>
                <input type="datetime-local" name="end_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($reservation->end_time)) }}">
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">@lang('bt.update_reservation')</button>
            </form>
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">@lang('bt.back_to_list')</a>
                </div>
        </div>
    </div>
</section>
@stop
