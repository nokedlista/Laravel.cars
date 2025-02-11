@extends('layout')

<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>

@section('content')
    <h1>"{{ $maker->name }}" gyártó</h1>
    <div class="row">
        <div>{{ $maker->id }}</div>
        <div>{{$maker->name}}</div>
    </div>
@endsection 
