<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Fecha nacimiento</th>
                <th>Nombre humano</th>
                <th>Descripcion</th>
                <th>Photo</th>
                <th colspan="2" class="text-center">Opcionés</th>
            </tr>
        </thead>
        <tbody>
            @if (count($pets)>0)
            @foreach ($pets as $pet )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pet->name}}</td>
                <td>{{$pet->species->name}}</td>
                <td>{{$pet->born_date}}</td>
                <td>{{$pet->human_name}}</td>
                <td>{{$pet->description}}</td>
                <td>
                <img style="border-radius: 100%;" height="30px" src="{{asset('storage').'/'.$pet->Photo}}" alt="">
                </td>
                <td>
                    <a class="btn btn-primary" href="{{url('pets/'.$pet->id.'/edit')}}">Editar</a>
                </td>
                <td>
                    <form action="{{url('pets/'.$pet->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input onclick="return confirm('¿Desea eliminar esta mascota?')" type="submit" class="btn btn-danger" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <td colspan="8" class="text-center">Aun no hay registros</td>
            @endif
        </tbody>
    </table>
</div>