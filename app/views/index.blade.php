@extends('layouts.default')

@section('head')
<title>Pizzaz - index</title>
@stop

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h1>Welcome to Pizzaz!</h1>
                <p>Sign in to eat some nom noms!</p>
                <p>Here at Pizzaz you can order food from any popular pizza place around you!</p>
                <p>a{{ Auth::user() }}z</p>
            </div>
            <div class="col-lg-6">
                <h1>Supported Pizza Stores</h1>
                {{ HTML::image(asset('images/pizzalogos.png'), 'Sample Pizza Places', ['class' => 'img-thumbnail']) }}
            </div>
        </div>
@stop