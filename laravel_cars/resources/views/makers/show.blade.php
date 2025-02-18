@extends('layout')

@section('content')
    <h1>"{{ $maker->name }}" gyártó</h1>
    <div class="row">
        <div>{{ $maker->id }}</div>
        <div>{{$maker->name}}</div>
    </div>
@endsection 
