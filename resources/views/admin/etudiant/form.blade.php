<div class="row">
    <div class="col-md-4 required form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
        <label for="photo" class="control-label">{{ 'Photo etudiant' }} <span class="text-red">*</span></label>
        <input class="form-control" accept="image/png,image/gif,image/jpg,image/jpeg" name="photo" type="file"
            id="photo" placeholder="Entrer le photo de la etudiant"
            value="{{ isset($etudiant->photo) ? $etudiant->photo : '' }}" required>
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 required form-group {{ $errors->has('age') ? 'has-error' : '' }}">
        <label for="age" class="control-label">{{ 'Age etudiant' }} <span class="text-red">*</span></label>
        <input class="form-control" min="10" max="35" name="age" type="number" id="age"
            placeholder="Entrer le age de la etudiant" value="{{ isset($etudiant->age) ? $etudiant->age : '' }}" required>
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
        <label for="telephone" class="control-label">{{ 'Telephone etudiant' }} <span class="text-red">*</span></label>
        <input class="form-control" name="telephone" type="text" id="telephone"
            placeholder="Entrer le telephone de la etudiant"
            value="{{ isset($etudiant->telephone) ? $etudiant->telephone : '' }}" required>
        {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
        <label for="nom" class="control-label">{{ 'Nom etudiant' }} <span class="text-red">*</span></label>
        <input class="form-control" name="nom" type="text" id="nom"
            placeholder="Entrer le nom de la etudiant" value="{{ isset($etudiant->nom) ? $etudiant->nom : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
        <label for="prenom" class="control-label">{{ 'Prenom etudiant' }} <span class="text-red">*</span></label>
        <input class="form-control" name="prenom" type="text" id="prenom"
            placeholder="Entrer le prenom de la etudiant" value="{{ isset($etudiant->prenom) ? $etudiant->prenom : '' }}"
            required>
        {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-3 required form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
        <label for="ville" class="control-label">{{ 'R??sidence' }} <span class="text-red">*</span></label>
        <input class="form-control" name="ville" type="text" id="ville"
            placeholder="Entrer le quartier de la residence"
            value="{{ isset($etudiant->ville) ? $etudiant->ville : '' }}" required>
        {!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-3 requiredform-group {{ $errors->has('niveau') ? 'has-error' : '' }}">
        <label for="niveau" class="control-label">{{ 'Niveau' }} <span class="text-red">*</span></label>
        <select required name="niveau" class="form-control">
            <option selected disabled>Veuillez selectionner un niveau</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'A1' ? 'selected' : '' }} value="A1">
                A1</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'A2' ? 'selected' : '' }} value="A2">
                A2</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'B1' ? 'selected' : '' }} value="B1">
                B1</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'B2' ? 'selected' : '' }} value="B2">
                B2</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'C1' ? 'selected' : '' }} value="C1">
                C1</option>
        </select>
        {!! $errors->first('niveau', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-3 requiredform-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
        <label for="sexe" class="control-label">{{ 'Sexe' }} <span class="text-red">*</span></label>
        <select required name="sexe" class="form-control">
            <option selected disabled>Veuillez selectionner un sexe</option>
            <option {{ isset($etudiant->sexe) && $etudiant->sexe == 'Masculin' ? 'selected' : '' }} value="Masculin">
                Masculin</option>
            <option {{ isset($etudiant->sexe) && $etudiant->sexe == 'Feminin' ? 'selected' : '' }} value="Feminin">
                Feminin</option>
        </select>
        {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-3 requiredform-group {{ $errors->has('statut') ? 'has-error' : '' }}">
        <label for="statut" class="control-label">{{ 'Statut' }} <span class="text-red">*</span></label>
        <select required name="statut" class="form-control">
            <option selected disabled>Veuillez selectionner un statut</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'en_regle' ? 'selected' : '' }}
                value="en_regle">
                En r??gle</option>
                <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'en_cours' ? 'selected' : '' }}
                    value="en_cours">
                    En cours</option>
            <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'non_en_regle' ? 'selected' : '' }}
                value="non_en_regle">
                Non en r??gle</option>
        </select>
        {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('classe_id') ? 'has-error' : '' }}">
        <label for="classe_id" class="control-label">{{ 'Classe etudiant' }} <span class="text-red">*</span></label>
        <select name="classe_id" id="classe_id js-example-basic-single" class="custom-select2 form-control">

            <option selected disabled>Veuillez selectionner une salle de classe</option>
            @foreach ($classe as $item)
                <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->classe_id) selected @endif>
                    {{ $item->nom }} </option>
            @endforeach
        </select>
        {!! $errors->first('classe_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('formation_id') ? 'has-error' : '' }}">
        <label for="formation_id" class="control-label">{{ 'Formation etudiant' }} <span
                class="text-red">*</span></label>
        <select name="formation_id" id="formation_id js-example-basic-single" class="custom-select2 form-control">

            <option selected disabled>Veuillez selectionner la formation de l'??tudiant</option>
            @foreach ($formation as $item)
                <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->formation_id) selected @endif>
                    {{ $item->nom }} </option>
            @endforeach
        </select>
        {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('nom_parent') ? 'has-error' : '' }}">
        <label for="nom_parent" class="control-label">{{ 'Nom parent' }} <span class="text-red">*</span></label>
        <input class="form-control" name="nom_parent" type="text" id="nom_parent"
            placeholder="Entrer le nom_parent de la etudiant"
            value="{{ isset($etudiant->nom_parent) ? $etudiant->nom_parent : '' }}" required>
        {!! $errors->first('nom_parent', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('contact_parent') ? 'has-error' : '' }}">
        <label for="contact_parent" class="control-label">{{ 'Contact parent' }} <span
                class="text-red">*</span></label>
        <input class="form-control" name="contact_parent" type="text" id="contact_parent"
            placeholder="Entrer le contact_parent de la etudiant"
            value="{{ isset($etudiant->contact_parent) ? $etudiant->contact_parent : '' }}" required>
        {!! $errors->first('contact_parent', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('ville_provenance') ? 'has-error' : '' }}">
        <label for="ville_provenance" class="control-label">{{ 'Ville de provenance etudiant' }} <span
                class="text-red">*</span></label>
        <input class="form-control" name="ville_provenance" type="text" id="ville_provenance"
            placeholder="Entrer le ville_provenance de la etudiant"
            value="{{ isset($etudiant->ville_provenance) ? $etudiant->ville_provenance : '' }}" required>
        {!! $errors->first('ville_provenance', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('niveau_etude') ? 'has-error' : '' }}">
        <label for="niveau_etude" class="control-label">{{ 'Niveau d\'etude etudiant' }} <span
                class="text-red">*</span></label>
        <input class="form-control" name="niveau_etude" type="text" id="niveau_etude"
            placeholder="Entrer le niveau_etude de la etudiant"
            value="{{ isset($etudiant->niveau_etude) ? $etudiant->niveau_etude : '' }}" required>
        {!! $errors->first('niveau_etude', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('formation_scolaire') ? 'has-error' : '' }}">
        <label for="formation_scolaire" class="control-label">{{ 'Diplome etudiant' }} <span
                class="text-red">*</span></label>
        <input class="form-control" name="formation_scolaire" type="text" id="formation_scolaire"
            placeholder="Entrer le formation_scolaire de la etudiant"
            value="{{ isset($etudiant->formation_scolaire) ? $etudiant->formation_scolaire : '' }}" required>
        {!! $errors->first('formation_scolaire', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('formation_professionnelle') ? 'has-error' : '' }}">
        <label for="formation_professionnelle" class="control-label">{{ 'Formation professionnelle' }} <span
                class="text-red">*</span></label>
        <input class="form-control" name="formation_professionnelle" type="text" id="formation_professionnelle"
            placeholder="Entrer le formation_professionnelle de la etudiant"
            value="{{ isset($etudiant->formation_professionnelle) ? $etudiant->formation_professionnelle : '' }}"
            required>
        {!! $errors->first('formation_professionnelle', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">{{ 'Description' }} </label>
        <textarea class="form-control" rows="3" placeholder="Doonez plus d'informations sur l'??tudiant"
            name="description" type="textarea" id="description">{{ isset($etudiant->description) ? $etudiant->description : '' }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group" align="center">
    <input class="btn btn-primary col-md-6" type="submit"
        value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
