@extends('layouts.main')

@section('title', 'Vacation Request Approval')

@section('content')
    <p>Please Approve or Decline these vacation requests</p>
    @foreach ($vacations as $v)
        <p>Start Date: {{ $v->start_at }}, End Date: {{ $v->end_at }}, Type: {{ $v->type }}, Approve: {{ $v->approved }}, <a href="{{url('approval',['id' => $v->id, 'approve' => 'true'])}}">Approve</a> <a href="{{url('approval', ['id' => $v->id, 'approve' => 'false'])}}">Decline</a></p>
    @endforeach
@stop