@extends('layouts.default')
@section('head')
<title>Pizzaz - Sign up</title>
@stop
@section('content')
    <h1>Create a new account!</h1>
    {{ Form::open(['route' => 'users.store']) }}
        @if(count($errors) > 0)
            <div class="errors">
                <ul class="list-unstyled">
                    @foreach($errors->toArray() as $error => $messages)
                        <li>
                            <span class="error">{{ ucwords($error) }}</span>
                            <ul>
                                @foreach($messages as $message)
                                    <li class="error-message">{{ $message }}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
            {{ $errors->first('username', '<label for="username" class="error">:message</label>') }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            {{ $errors->first('password', '<label for="password" class="error">:message</label>') }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
            {{ $errors->first('email', '<label for="email" class="error">:message</label>') }}
        </div>
        {{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@stop