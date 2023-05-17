
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Reservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{ route('add_reservations')}}" method="POST" >

            <div class="modal-body">
                {!! csrf_field() !!}
                <div class="mb-3">
                  <label for="dateDebutReservation" class="form-label">Date Debut Reservation</label>
                  <input type="text" class="form-control" id="dateDebutReservation" name="dateDebutReservation">
                </div>
                <div class="mb-3">
                  <label for="dateFinReservation" class="form-label">Date Fin Reservation</label>
                  <input type="text" class="form-control" id="dateFinReservation" name="dateFinReservation">
                </div>
                <div class="mb-3">
                    <label for="nombreJours" class="form-label">nombreJours</label>
                    <input type="text" class="form-control" id="nombreJours" name="nombreJours">
                  </div>
                  

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>

    </div>
    </div>
</div>

