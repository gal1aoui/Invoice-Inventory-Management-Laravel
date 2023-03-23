@extends('layouts.master')

@section('content')
<section class="content-header">
    <h3 class="float-left">@lang('bt.room')</h3>

    <div class="float-right">
        <a href="{{ route('rooms.create') }}" class="btn btn-primary">
            <i class="fa fa-credit-card"></i>@lang('bt.create_room')
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
                        <th scope="col">@lang('bt.id')</th>
                        <th scope="col">@lang('bt.name')</th>
                        <th scope="col">@lang('bt.purchase_price')</th>
                        <th scope="col">@lang('bt.selling_price')</th>
                        <th scope="col">@lang('bt.adults_number')</th>
                        <th scope="col">@lang('bt.kids_number')</th>
                        <th scope="col">@lang('bt.number')</th>
                        <th scope="col">@lang('bt.type')</th>
                        <th scope="col">@lang('bt.room_formula')</th>
                        <th scope="col">@lang('bt.actions')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr scope="row">
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->purchase_price }}</td>
                        <td>{{ $room->selling_price }}</td>
                        <td>{{ $room->adults_number }}</td>
                        <td>{{ $room->kids_number }}</td>
                        <td>{{ $room->number }}</td>
                        <td>{{ $room->type }}</td>
                        <td>{{ $room->room_formula }}</td>
                        <td class="d-flex justify-content-around">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    @lang('bt.options') </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ route('rooms.edit', $room->id) }}"><i class="fa fa-edit"></i> @lang('bt.edit')</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
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
