@extends('main_layout')

@section('content')
        kittypoom
@stop

@section('sidebar')
    <ul>
        @foreach($menus as $menu)
            <li>{{ $menu }}</li>
        @endforeach
    </ul>
@stop