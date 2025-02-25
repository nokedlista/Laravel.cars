@extends('layout')

@section('content')
<h1>Járművek</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @include('success')
    <a href="{{ route('vehicles.create') }}" title="Új">Új hozzáadása</a>
	@foreach($vehicles as $vehicle)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $vehicle->id }}</div>
			<div class="col">{{$vehicle->name}}</div>
			<div class="right">
				<div class="col"><a href="{{ route('vehicles.show', $vehicle->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button></a></div>
				<!-- Bejelentkezett felhasználó ellenőrzése, csak ha a breeze csomagot telepítettük -->
					<div class="col"><a href="{{ route('vehicles.edit', $vehicle->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosít</button></a></div>
					<div class="col">
						<form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-vehicle"><i class="fa fa-trash-can trash" title="Töröl"></i>Töröl</button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection
