@extends('layout')

@section('content')
    <livewire:services />
    <ul>
        @forelse($services as $service)
            <li>{{ $service['email'] }}</li>
        @empty
            <li>No hay servicios cargados</li>
        @endforelse
    </ul>
@endsection