@extends('layout')

<main>
    @yield('content')
</main>	
@section('content')
<h1>Új jármű</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')

    <form action="{{route('vehicles.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
            <label for="registration_number">Rendszám</label>
            <input type="text" id="registration_number" name="registration_number">
            <label for="VIN">Jármű azonosító szám</label>
            <input type="text" id="VIN" name="VIN">
            <label for="maker_ID">Gyártó ID-je</label>
            <select name="maker_ID" id="maker_ID">
                <option value="">--- Válassz egy gyártót ---</option>
                @foreach($makers as $maker)
                <option value="{{ $maker->name }}">{{ $maker->name }}</option>
                @endforeach
            </select>
            <label for="body_ID">Alváz ID-je</label>
            <select name="body_ID" id="body_ID">
                <option value="">--- Válassz egy alvázat ---</option>
                @foreach($bodies as $body)
                <option value="{{ $body->name }}">{{ $body->name }}</option>
                @endforeach
            </select>
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('vehicles.index') }}">Mégse</a>
    </form>
</div>
@endsection

