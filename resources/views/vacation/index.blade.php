@extends('layouts.main')

@section('title', 'Vacation Request')

@section('content')
        <div class="title">This will show you all your vacation requests.</div>
        @foreach ($vacations as $v)
                <p>Start Date: {{ $v->start_at }}, End Date: {{ $v->end_at }}, Type: {{ $v->type }}, Approved: {{$v->approved}}</p>
        @endforeach
        <div><a href="{{route('vacation.create')}}">Add another request.</a></div>
@stop
