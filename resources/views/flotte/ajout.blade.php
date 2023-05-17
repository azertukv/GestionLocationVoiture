<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Flotte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('add_flotte')}}" method="POST">

            <div class="modal-body">
                {!! csrf_field() !!}
                <div class="mb-3">
                  <label for="immatriculation" class="form-label">Immatriculation</label>
                  <input type="text" class="form-control" id="immatriculation" name="immatriculation">
                </div>
                <div class="mb-3">
                  <label for="marque" class="form-label">Marque</label>
                  <input type="text" class="form-control" id="marque" name="marque">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                  </div>
                  <div class="mb-3">
                    <label for="modele" class="form-label">Modèle</label>
                    <input type="text" class="form-control" id="modele" name="modele">
                  </div>
                  <div class="mb-3">
                    <label for="kilometrage" class="form-label">Kilométrage</label>
                    <input type="text" class="form-control" id="kilometrage" name="kilometrage">
                  </div>
                  <div class="mb-3">
                    <label for="nbrPorte" class="form-label">Nombre de porte</label>
                    <input type="text" class="form-control" id="nbrPorte" name="nbrPorte">
                  </div>
                  <div class="mb-3">
                    <label for="couleur" class="form-label">Couleur</label>
                    <input type="text" class="form-control" id="couleur" name="couleur">
                  </div>
                  <div class="mb-3">
                    <label for="dispnibilite" class="form-label">Disponibilité</label>
                    <input type="text" class="form-control" id="dispnibilite" name="dispnibilite">
                  </div>
                  <div class="mb-3">
                    <label for="expeditionCarteGrise" class="form-label">Expedition de la carte grise</label>
                    <input type="text" class="form-control" id="expeditionCarteGrise" name="expeditionCarteGrise">
                  </div>
                  <div class="mb-3">
                    <label for="dateFinAssurance" class="form-label">Date fin d'assurance</label>
                    <input type="text" class="form-control" id="dateFinAssurance" name="dateFinAssurance">
                  </div>
                  <div class="mb-3">
                    <label for="prixLocation" class="form-label">Prix de location</label>
                    <input type="text" class="form-control" id="prixLocation" name="prixLocation">
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
