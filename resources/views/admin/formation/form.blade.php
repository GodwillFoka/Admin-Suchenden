<div class="row">
    <div class="col-md-12 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
        <label for="nom" class="control-label">{{ 'Nom formation' }} <span class="text-red">*</span></label>
        <input class="form-control" name="nom" type="text" id="nom" placeholder="Entrer le nom de la formation"
            value="{{ isset($formation->nom) ? $formation->nom : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">{{ 'Description' }} </label>
        <textarea class="form-control" rows="3" placeholder="Decrivez la formation ..." name="description" type="textarea"
            id="description">{{ isset($formation->description) ? $formation->description : '' }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group" align="center">
    <input class="btn btn-primary col-md-6" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
</div>
