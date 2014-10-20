@extends('layouts.default')
@section('head')
<title>Pizzaz - create</title>
@stop
@section('content')
    {{ Form::model('orders') }}
        {{ Form::text('text') }}
    {{ Form::close() }}
@stop