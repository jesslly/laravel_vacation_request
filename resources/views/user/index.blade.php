@extends('layouts.main')

@section('title', 'Create User')

@section('content')
    @foreach ($users as $u)
        <p>Name: {{ $u->name }}, Email: {{ $u->email }}, Role: {{ $u->role }}</p>
    @endforeach

    <p><a href="{{ url('user/create') }}">Create User</a></p>
@stop