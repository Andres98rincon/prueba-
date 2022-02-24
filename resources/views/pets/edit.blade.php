@extends('layouts.app')
@section('content')
<div class="container pt-4">
    <form action="{{url('pets/'.$pet->id)}}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="p-3 card col-sm-5">
            <img  src="{{asset('storage').'/'.$pet->Photo}}" alt="">
                <input class="form-control p-4 @error('photo') is-invalid @enderror" type="file" name="photo" id="photo">
                @error('photo')
                <div class="invalid-feedback">
                    <span>
                        {{$message}}
                    </span>
                </div>
                @enderror
            </div>
            <div class="p-5 card col-sm-7">
                @csrf
                @method('PATCH')
                @include('pets.form')
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary  col-sm-4">Guardar</button>
                        <a href="{{url('home')}}" type="submit" class="btn btn-secondary col-sm-4">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection