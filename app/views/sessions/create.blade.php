@extends('layouts.default')
@section('head')
<title>Pizzaz - Sign in</title>
@stop
@section('content')
    @if(Session::has('error'))
        <div class="errors">
            {{ Session::get('error') }}
        </div>
    @endif
    {{ Form::open(['route' => 'sessions.store']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Sign in', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@stop