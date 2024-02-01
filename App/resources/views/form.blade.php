<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="nominputnom1">Nom de Voiture <span class="text-danger">*</span></label>
            <input name="nom" type="text" class="form-control"
                id="nominputnom1" placeholder="Enter le name de voiture" value="">
        </div>
        <div class="form-group">
            <label for="nominputnom1">Couleur <span class="text-danger">*</span></label>
            <input name="nom" type="text" class="form-control"
                id="nominputnom1" placeholder="Enter le name de voiture" value="">
        </div>
        <div class="form-group">
            <label for="nominputnom1">Couleur <span class="text-danger">*</span></label>
            <input name="nom" type="text" class="form-control"
                id="nominputnom1" placeholder="Enter le name de voiture" value="">
        </div>
        <div class="form-group">
            <label for="nominputnom1">Année modèle	 <span class="text-danger">*</span></label>
            <input name="nom" type="date" class="form-control"
                id="nominputnom1" placeholder="Enter le name de voiture" value="">
        </div>

    </div>

    <div class="card-footer">
        <a href="{{ route('index') }}" class="btn btn-default">annuler</a>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>
