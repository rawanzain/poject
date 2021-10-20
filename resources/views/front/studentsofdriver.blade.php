@extends('layouts.app')
@section('content')
@foreach($students as $student)
    <p>{{$student->id}}</p>
@endforeach

    @endsection