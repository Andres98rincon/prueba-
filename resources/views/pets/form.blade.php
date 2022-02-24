<h2 class="mb-5">Mascota</h2>
<div class="row">
    <div class="col-sm-6">
        <label for="name" class="form-label">Nombre mascota*</label>
        <input value="{{isset($pet->name) ? $pet->name : ''}}" class="form-control @error('name') is-invalid  @enderror" name="name" id="name" placeholder="Digite el nombre de la mascota" type="text">
        @error('name')
        <div class="invalid-feedback">
            <span>
                {{$message}}
            </span>
        </div>
        @enderror
    </div>

    <div class="col-sm-6">
        <label for="name" class="form-label">Raza*</label>
        <select class="form-control @error('species_id') is-invalid  @enderror" name="species_id" id="species_id">
            <option selected disabled>{{isset($pet->species_id) ? $pet->species->name : 'Seleccione'}}</option>
            @if ($species)
                @foreach ($species as $specie )
                    <option value="{{$specie->id}}">{{$specie->name}}</option>
                @endforeach
            @endif
        </select>
        @error('species_id')
        <div class="invalid-feedback">
            <span>
                {{$message}}
            </span>
        </div>
        @enderror
    </div>

    <div class=" mt-3 col-sm-6">
        <label for="name" class="form-label">Fecha de nacimiento*</label>
        <input value="{{isset($pet->born_date) ? $pet->born_date : ''}}"class="form-control @error('born_date') is-invalid  @enderror" name="born_date" id="born_date" placeholder="Digite el nombre de la mascota" type="date">
        @error('born_date')
        <div class="invalid-feedback">
            <span>
                {{$message}}
            </span>
        </div>
        @enderror
    </div>

    <div class="mt-3 col-sm-6">
        <label for="name" class="form-label">Nombre humano*</label>
        <input value="{{isset($pet->human_name) ? $pet->human_name : ''}}" class="form-control @error('human_name') is-invalid  @enderror" name="human_name" id="human_name" placeholder="Digite el nombre de la mascota" type="text">
        @error('human_name')
        <div class="invalid-feedback">
            <span>
                {{$message}}
            </span>
        </div>
        @enderror
    </div>

    <div class="col-sm-12">
        <label for="">Descripción*</label>
        <textarea class="form-control @error('description') is-invalid  @enderror" name="description" id="description" cols="30" rows="3">{{isset($pet->description) ? $pet->description : ''}}</textarea>
        @error('description')
        <div class="invalid-feedback">
            <span>
                {{$message}}
            </span>
        </div>
        @enderror
    </div>
</div>