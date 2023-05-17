<div class="modal fade" id="editModal{{ $flotte->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel{{ $flotte->id }}" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel{{ $flotte->id }}">Modifier flotte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('update_flotte',$flotte->id)}}" method="POST">

            <div class="modal-body">
                {!! csrf_field() !!}
                <div class="mb-3">
                    <label for="immatriculation" class="form-label">Immatriculation</label>
                    <input type="text" class="form-control" id="immatriculation" name="immatriculation" value="{{ $flotte->immatriculation }}">
                  </div>
                  <div class="mb-3">
                    <label for="marque" class="form-label">Marque</label>
                    <input type="text" class="form-control" id="marque" name="marque" value="{{ $flotte->marque }}">
                  </div>
                  <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="text" class="form-control" id="type" name="type" value="{{ $flotte->type }}">
                    </div>
                    <div class="mb-3">
                      <label for="modele" class="form-label">Modèle</label>
                      <input type="text" class="form-control" id="modele" name="modele" value="{{ $flotte->modele }}">
                    </div>
                    <div class="mb-3">
                      <label for="kilometrage" class="form-label">Kilométrage</label>
                      <input type="text" class="form-control" id="kilometrage" name="kilometrage" value="{{ $flotte->kilometrage }}">
                    </div>
                    <div class="mb-3">
                      <label for="nbrPorte" class="form-label">Nombre de porte</label>
                      <input type="text" class="form-control" id="nbrPorte" name="nbrPorte" value="{{ $flotte->nbrPorte }}">
                    </div>
                    <div class="mb-3">
                      <label for="couleur" class="form-label">Couleur</label>
                      <input type="text" class="form-control" id="couleur" name="couleur" value="{{ $flotte->couleur }}">
                    </div>
                    <div class="mb-3">
                        <label for="dispnibilite" class="form-label">Disponibilité</label>
                        <input type="text" class="form-control" id="dispnibilite" name="dispnibilite" value="{{ $flotte->dispnibilite }}">
                      </div>
                      <div class="mb-3">
                        <label for="expeditionCarteGrise" class="form-label">Expédition de la carte grise</label>
                        <input type="text" class="form-control" id="expeditionCarteGrise" name="expeditionCarteGrise" value="{{ $flotte->expeditionCarteGrise }}">
                      </div>
                      <div class="mb-3">
                        <label for="dateFinAssurance" class="form-label">Date fin d'assurance</label>
                        <input type="text" class="form-control" id="dateFinAssurance" name="dateFinAssurance" value="{{ $flotte->dateFinAssurance }}">
                      </div>
                      <div class="mb-3">
                        <label for="prixLocation" class="form-label">Prix de location</label>
                        <input type="text" class="form-control" id="prixLocation" name="prixLocation" value="{{ $flotte->prixLocation }}">
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
