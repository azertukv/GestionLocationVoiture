<div class="modal fade" id="editModal{{ $reservation->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel{{ $reservation->id }}" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel{{ $reservation->id }}">Modifier reservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('update_reservations',$reservation->id)}}" method="POST">

            <div class="modal-body">
                {!! csrf_field() !!}
                <div class="mb-3">
                    <label for="dateDebutReservation" class="form-label">dateDebutReservation</label>
                    <input type="text" class="form-control" id="dateDebutReservation" name="dateDebutReservation" value="{{ $reservation->dateDebutReservation }}">
                  </div>
                  <div class="mb-3">
                    <label for="dateFinReservation" class="form-label">dateFinReservation</label>
                    <input type="text" class="form-control" id="dateFinReservation" name="dateFinReservation" value="{{ $reservation->dateFinReservation }}">
                  </div>
                  <div class="mb-3">
                      <label for="nombreJours" class="form-label">nombreJours</label>
                      <input type="text" class="form-control" id="nombreJours" name="nombreJours" value="{{ $reservation->nombreJours }}">
                    </div>
                   


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>
    </div>
</div>
