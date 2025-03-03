@extends('layout')
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
@section('content')
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        @include('error')
        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $vehicle->name) }}">
                <label for="registration_number">Rendszám tábla</label>
                <input type="text" id="registration_number" name="registration_number" required value="{{ old('registration_number', $vehicle->registration_number) }}">
                <label for="VIN">Jármű azonosító</label>
                <input type="text" id="VIN" name="VIN" required value="{{ old('VIN', $vehicle->VIN) }}">
                <select name="maker_ID" id="maker_ID">
                    @foreach($makers as $maker)
                        <?php
                        if($maker->name == old('maker_ID', $vehicle->maker_ID))
                        {
                            echo "<option selected value='$maker->name'>$maker->name</option>";
                        }
                        else
                        {
                            echo "<option value='$maker->name'>$maker->name</option>";
                        }
                        ?>
                    @endforeach
                </select>
                    </br>
                <select name="body_ID" id="body_ID">
                    @foreach($bodies as $body)
                        <?php
                        if($body->name == old('body_ID', $vehicle->body_ID))
                        {
                            echo "<option selected value='$body->name'>$body->name</option>";
                        }
                        else
                        {
                            echo "<option value='$body->name'>$body->name</option>";
                        }
                        ?>
                    @endforeach
                </select>
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('vehicles.index') }}">Mégse</a>
        </form>
    </div>
@endsection

