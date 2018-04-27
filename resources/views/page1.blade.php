@extends('main_layout')

@if ($isAdmin)
    @section('content')
        hello world admin
    @stop
@else
    @section('content')
        hello world normal
    @stop
@endif

@section('sidebar')
    <ul>
        @foreach($menus as $menu)
            <li>{{ $menu }}</li>
        @endforeach
    </ul>
@stop