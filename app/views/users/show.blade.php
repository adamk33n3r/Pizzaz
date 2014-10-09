@extends('layouts.default')
@section('head')
<title>Pizzaz - show</title>
@stop
@section('content')
    <div class="well">
        <h2>{{{ $user->username }}}</h2>
        <p>He is cool</p>
    </div>
@stop