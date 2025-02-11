@extends('layout')
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
@section('content')
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        @include('error')
<<<<<<< HEAD
        <form action="{{ route('makers.update', $maker->id) }}" method="post">
=======
        <form action="{{ route('bodies.update', $body->id) }}" method="post">
>>>>>>> 0f115b80f649d50cf8c18e9392f1a45eb67148b6
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
<<<<<<< HEAD
                <input type="text" id="name" name="name" required value="{{ old('name', $maker->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('makers.index') }}">Mégse</a>
        </form>
    </div>
@endsection

=======
                <input type="text" id="name" name="name" required value="{{ old('name', $body->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('bodies.index') }}">Mégse</a>
        </form>
    </div>
@endsection
>>>>>>> 0f115b80f649d50cf8c18e9392f1a45eb67148b6
