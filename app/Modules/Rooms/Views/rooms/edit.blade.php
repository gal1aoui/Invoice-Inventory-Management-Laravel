@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">@lang('bt.room')</h3>

    <div class="float-right">
        <a href="{{ route('rooms.create') }}" class="btn btn-primary">
            <i class="fa fa-credit-card"></i> @lang('bt.create_room')
        </a>
    </div>
    <div class="clearfix"></div>
</section>
<section class="content">
    @include('layouts._alerts')
    <div class="card ">
        <div class="card-body">
            <form action="{{ route('rooms.update', $room->id ) }}" method="post">
                @csrf
                <label>@lang('bt.hotel') :</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>Purchase Price :</label>
                <input type="number" step="0.01" name="purchase_price" class="form-control">
                <br>
                <label>Selling Price :</label>
                <input type="number" step="0.01" name="selling_price" class="form-control">
                <br>
                <label>Adults Number :</label>
                <input type="number" name="adults_number" class="form-control">
                <br>
                <label>Kids Number :</label>
                <input type="number" name="kids_number" class="form-control">
                <br>
                <label>Number :</label>
                <input type="number" name="number" class="form-control" value="{{$num}}" disabled>
                <br>
                <label>Type :</label>
                <input type="text" name="type" class="form-control" >
                <br>
                <label>Room Formula :</label>
                <input type="text" name="room_formula" class="form-control">
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">@lang('bt.create_room')</button>
            </form>
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary">@lang('bt.back_to_list')</a>
                </div>
    </div>
    </div>
</section>
@stop
