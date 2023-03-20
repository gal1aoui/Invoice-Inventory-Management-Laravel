@extends('layouts.master')

@section('content')
    <section class="content-header">
        <h3 class="float-left">@lang('bt.reservation')</h3>

        <div class="float-right">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">
               <i class="fa fa-credit-card"></i> @lang('bt.create_reservation')
            </a>
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="content">
        @include('layouts._alerts')
        <div class="card ">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">@lang('bt.hotel')</th>
                            <th scope="col">@lang('bt.name')</th>
                            <th scope="col">@lang('bt.email')</th>
                            <th scope="col">@lang('bt.start_time')</th>
                            <th scope="col">@lang('bt.end_time')</th>
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
                                <td class="d-flex justify-content-around">
                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning">@lang('bt.edit')</a>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">@lang('bt.delete')</button>
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
