@extends('layouts.main')

@section('title', 'Create User')

@section('content')
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('url' => 'user')) !!}

        <div>
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::label('Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::label('Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::label('Confirm Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::label('Role') !!}
            {!! Form::select('role', [
                   'employee' => 'Employee',
                   'manager' => 'Manager',
                   'admin' => 'Administrator']
            ) !!}
        </div>

        <div>
            {!! Form::submit() !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop