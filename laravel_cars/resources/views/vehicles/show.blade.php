@extends('layout')

@section('content')
    <h1>"{{ $vehicle->name }}" jármű</h1>
    <div class="row">
        <div>{{ $vehicle->id }}</div>
        <div>{{$vehicle->name}}</div>
        <div>{{ $vehicle->registration_number }}</div>
        <div>{{ $vehicle->VIN }}</div>
        <div>{{ $vehicle->maker_ID }}</div>
        <div>{{ $vehicle->body_ID }}</div>
    </div>
@endsection 
