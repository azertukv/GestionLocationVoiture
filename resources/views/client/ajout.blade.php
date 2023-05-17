
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{ route('add_client')}}" method="POST" >

            <div class="modal-body">
                {!! csrf_field() !!}
                <div class="mb-3">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                  <label for="prenom" class="form-label">Prénom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="dateNaissance" class="form-label">Date de naissance</label>
                    <input type="text" class="form-control" id="dateNaissance" name="dateNaissance">
                  </div>
                  <div class="mb-3">
                    <label for="cin" class="form-label">CIN</label>
                    <input type="text" class="form-control" id="cin" name="cin">
                  </div>
                  <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                  </div>
                  <div class="mb-3">
                    <label for="numPermis" class="form-label">Numéro de Pérmis</label>
                    <input type="text" class="form-control" id="numPermis" name="numPermis">
                  </div>
                  <div class="mb-3">
                    <label for="dateEditionPermis" class="form-label">Date Edition Permis</label>
                    <input type="text" class="form-control" id="dateEditionPermis" name="dateEditionPermis">
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

