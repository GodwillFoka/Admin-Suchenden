<div class="row">
    <div class="col-md-12 required form-group {{ $errors->has('rentree_id') ? 'has-error' : ''}}">
        <label for="rentree_id" class="control-label">{{ 'Niveau' }} <span class="text-red">*</span></label>
        <select name="rentree_id" id="rentree_id js-example-basic-single" class="custom-select2 form-control">

            <option selected disabled>Veuillez selectionner une rentrée</option>
            @foreach($rentree as $item)
                <option value="{{$item->id}}" @if( isset($klasse) && $item->id == $klasse->rentree_id) selected @endif> {{$item->nom}} </option>
            @endforeach
        </select>
        {!! $errors->first('rentree_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
        <label for="nom" class="control-label">{{ 'Nom classe' }} <span class="text-red">*</span></label>
        <input class="form-control" name="nom" type="text" id="nom" placeholder="Entrer le nom de la classe"
            value="{{ isset($klasse->nom) ? $klasse->nom : '' }}" required>
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">{{ 'Description' }} </label>
        <textarea class="form-control" rows="3" placeholder="Decrivez la klasse ..." name="description" type="textarea"
            id="description">{{ isset($klasse->description) ? $klasse->description : '' }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group" align="center">
    <input class="btn btn-primary col-md-6" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
</div>
