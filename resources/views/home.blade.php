@extends('layouts.app')

@section('title')
    Laravel 11
@endsection

@section('content')
    <div class="max-w-4xl px-4 mx-auto">

        {{-- <h1>Bienvenido a la página principal</h1> --}}
        <x-alert2 type='info'>
            <x-slot name="title">
                Titulo de la Alerta
            </x-slot>
            Contenido de la Alerta
        </x-alert2>
    </div>
@endsection


{{-- <x-app-layout>
        <div class="max-w-4xl px-4 mx-auto">

        {{-- <h1>Bienvenido a la página principal</h1>
        <x-alert2 type='info'>
            <x-slot name="title">
                Titulo de la Alerta
            </x-slot>
            Contenido de la Alerta
        </x-alert2>
    </div>

</x-app-layout> --}}
