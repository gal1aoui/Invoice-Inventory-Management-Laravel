@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">@lang('bt.reservation')</h3>

    <div class="float-right">
        <a href="{{ route('reservations.create') }}" class="btn btn-primary enter-multi-payment">
            <i class="fa fa-credit-card"></i> @lang('bt.create_reservation')
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
                <label>@lang('bt.hotel') :</label>
                <input type="text" name="hotel" class="form-control">
                <br>
                <label>@lang('bt.name') :</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>@lang('bt.email') :</label>
                <input type="email" name="email" class="form-control">
                <br>
                <label>@lang('bt.start_time') :</label>
                <input type="datetime-local" name="start_time" class="form-control">
                <br>
                <label>@lang('bt.check_out') :</label>
                <input type="datetime-local" name="end_time" class="form-control">
                <br>
                <label>@lang('bt.description') :</label>
                <input type="text" name="description" class="form-control">
                <br>
                <label>@lang('bt.client') :</label>
                <div class="form-group">
                    <select name="client_id" id="client_id" class="form-control" required>
                        @foreach(\BT\Modules\Clients\Models\Client::pluck('name', 'id') as $clientId => $clientName)
                            <option value="{{ $clientId }}" {{ old('client_id') == $clientId ? 'selected' : '' }}>{{ $clientName }}</option>
                        @endforeach
                    </select>
                </div>
                <label>@lang('bt.vendor') :</label>
                <div class="form-group">
                    <select name="vendor_id" id="vendor_id" class="form-control" required>
                        @foreach(\BT\Modules\Vendors\Models\Vendor::pluck('name', 'id') as $vendorId => $vendorName)
                            <option value="{{ $vendorId }}" {{ old('vendor_id') == $vendorId ? 'selected' : '' }}>{{ $vendorName }}</option>
                        @endforeach
                    </select>
                </div>

                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">@lang('bt.create_reservation')</button>
            </form>
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">@lang('bt.back_to_list')</a>
                </div>
        </div>
    </div>
</section>
@stop
