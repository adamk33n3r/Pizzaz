@extends('layouts.default')
@section('head')
<title>Pizzaz - Users</title>
@stop
@section('content')
    <ul>
        @foreach($users as $user)
            <li>{{ link_to_route('users.show', $user->username, $user->id) }}</li>
        @endforeach
    </ul>
@stop