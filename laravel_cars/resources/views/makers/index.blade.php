@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @include('success')
    <a href="{{ route('makers.create') }}" title="Új">Új hozzáadása</a>
	@foreach($makers as $maker)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $maker->id }}</div>
			<div class="col">{{$maker->name}}</div>
			<div class="right">
				<div class="col"><a href="{{ route('makers.show', $maker->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i>Mutat</button></a></div>
				<!-- Bejelentkezett felhasználó ellenőrzése, csak ha a breeze csomagot telepítettük -->
					<div class="col"><a href="{{ route('makers.edit', $maker->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosít</button></a></div>
					<div class="col">
						<form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-maker"><i class="fa fa-trash-can trash" title="Töröl"></i>Töröl</button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection
