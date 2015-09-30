@extends('layouts.main')

@section('title', 'Vacation Request')

@section('content')
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('url' => 'vacation')) !!}

        <div>
        {!! Form::label('Start Date') !!}
        {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}
        </div>

        <div>
        {!! Form::label('End Date') !!}
        {!! Form::input('date', 'end_date', null, ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::label('Type') !!}
            {!! Form::select('type', [
                   'paid' => 'Paid',
                   'unpaid' => 'Unpaid']
            ) !!}
        </div>

        <div>
            {!! Form::submit() !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop