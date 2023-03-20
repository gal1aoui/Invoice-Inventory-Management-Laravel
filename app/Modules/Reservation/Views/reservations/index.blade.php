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
            <table class="table table-striped">
                <thead class="thead text-white" style="background-color: rgb(149, 97, 226);">
                    <tr>
                        <th scope="col">@lang('bt.hotel')</th>
                        <th scope="col">@lang('bt.hotel')</th>
                        <th scope="col">@lang('bt.email')</th>
                        <th scope="col">@lang('bt.start_time')</th>
                        <th scope="col">@lang('bt.end_time')</th>
                        <th scope="col">@lang('bt.reserved')</th>
                        <th scope="col">@lang('bt.actions')</th>
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
                            @if($reservation->used == 1) @lang('bt.reserved') @endif
                            @if($reservation->used == 0) @lang('bt.available') @endif
                        </td>
                        <td class="d-flex justify-content-around">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    @lang('bt.options') </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ route('reservations.edit', $reservation->id) }}"><i class="fa fa-edit"></i> @lang('bt.edit')</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"><i class="fa fa-trash-alt"></i> @lang('bt.delete')</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop
