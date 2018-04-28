@extends('theme.default')


@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">My Users</h1>

    </div>

    <!-- /.col-lg-12 -->

</div>

<!-- /.row -->

<?php $users = DB::table('users')->get() ?>
<table class="table table-striped table-bordered table-hover">

    <thead>

        <tr>

            <th>#</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Username</th>

            <th>Type</th>

        </tr>

    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>

            <td>{{$user->id}}</td>

            <td>{{$user->firstname}}</td>

            <td>{{$user->lastname}}</td>

            <td>{{$user->email}}</td>

            <td>{{$user->type}}</td>

        </tr>

    @endforeach

    </tbody>

</table>


@endsection