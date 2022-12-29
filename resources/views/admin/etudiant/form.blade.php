<div class="row">
    <div class="col-md-6 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
        <label for="nom" class="control-label">{{ 'Nom rentree' }} <span class="text-red">*</span></label>
        <input class="form-control" name="nom" type="text" id="nom" placeholder="Entrer le nom de la rentree"
            value="{{ isset($rentree->nom) ? $rentree->nom : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 required form-group {{ $errors->has('date_debut') ? 'has-error' : '' }}">
        <label for="date_debut" class="control-label">{{ 'date debut rentree' }} <span class="text-red">*</span></label>
        <input class="form-control" name="date_debut" type="date" id="date_debut"
            value="{{ isset($rentree->date_debut) ? $rentree->date_debut : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">{{ 'Description' }} </label>
        <textarea class="form-control" rows="3" placeholder="Decrivez la rentree ..." name="description" type="textarea"
            id="description">{{ isset($rentree->description) ? $rentree->description : '' }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group" align="center">
    <input class="btn btn-primary col-md-6" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
</div>
