@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-5 text-center mt-5">
        @if (session('guardar'))
        <script>
            Swal.fire(
                '¡Buen trabajo!',
                'Datos guardados!',
                'success'
            )
        </script>
        @endif
        @if (session('borrar'))
        <script>
            Swal.fire(
                '¡Buen trabajo!',
                'Datos borrados con exito!',
                'success'
            )
        </script>
        @endif
        <div class="row">
            <x-pets.pets :pets="$pets"></x-pets.pets>
            <x-shop.shop></x-shop.shop>
            <x-medical_appointment.appointment></x-medical_appointment.appointment>
        </div>
    </div>
</div>
@endsection