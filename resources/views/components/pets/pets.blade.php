<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
        <img width="100%" src="{{asset('img/login2.jpeg')}}" alt="">
            <a href="{{url('pets')}}" class=""><strong>Mascota</strong></a>
            <a data-bs-toggle="modal" data-bs-target="#vermascotas" href="{{url('pets')}}" class=""><strong>Ver mascotas</strong></a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="vermascotas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mascotas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-pets.table :pets="$pets"></x-pets.table>
            </div>
        </div>
    </div>
</div>