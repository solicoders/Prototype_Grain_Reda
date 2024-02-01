<form action="{{ route('store') }}" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="cars">Voiture <span class="text-danger">*</span></label>
            <select name="cars_id" id="cars" class="custom-select">
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->Car_Name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nominputnom1">Nom de Model <span class="text-danger">*</span></label>
            <input name="Model_Name" type="text" class="form-control" id="nominputnom1"
                placeholder="Enter le name de voiture" value="{{ $model->id ? $model->Model_Name}}">
        </div>
        <div class="form-group">
            <label for="nominputnom1">Année modèle <span class="text-danger">*</span></label>
            <select name="Model_Year" id="cars" class="custom-select">
                @for ($i = 1999; $i < 2024; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

    </div>

    <div class="card-footer">
        <a href="{{ route('index') }}" class="btn btn-default">annuler</a>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>
