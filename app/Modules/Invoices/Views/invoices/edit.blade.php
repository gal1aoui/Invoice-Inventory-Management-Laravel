@extends('layouts.master')

@section('javascript')


    @include('item_lookups._js_item_lookups')

@stop

@section('content')

    <div id="div-invoice-edit">

        @include('invoices._edit')

    </div>

@stop