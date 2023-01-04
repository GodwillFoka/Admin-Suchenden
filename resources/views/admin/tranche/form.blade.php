<div class="row">
    <div class="col-md-6 requiredform-group {{ $errors->has('nom') ? 'has-error' : '' }}">
        <label for="nom" class="control-label">{{ 'Niveau' }} <span class="text-red">*</span></label>
        <select required name="nom" class="form-control">
            <option selected disabled>Veuillez selectionner une rentrée</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'INSCRIPTION' ? 'selected' : '' }} value="INSCRIPTION">
                INSCRIPTION</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'A1' ? 'selected' : '' }} value="A1">
                A1</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'A2' ? 'selected' : '' }} value="A2">
                A2</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'B1' ? 'selected' : '' }} value="B1">
                B1</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'B2' ? 'selected' : '' }} value="B2">
                B2</option>
            <option {{ isset($tranche->nom) && $tranche->nom == 'C1' ? 'selected' : '' }} value="C1">
                C1</option>
        </select>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-6 required form-group {{ $errors->has('montant') ? 'has-error' : '' }}">
        <label for="montant" class="control-label">{{ 'Montant à verser' }} <span class="text-red">*</span></label>
        <input class="form-control" name="montant" placeholder="Entrer le montant de la tranche" type="number"
            id="montant" value="{{ isset($tranche->montant) ? $tranche->montant : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">{{ 'Description' }} </label>
        <textarea class="form-control" rows="3" placeholder="Pourquoi ce montant ..." name="description" type="textarea"
            id="description">{{ isset($tranche->description) ? $tranche->description : '' }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group" align="center">
    <input class="btn btn-primary col-md-6" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
</div>
