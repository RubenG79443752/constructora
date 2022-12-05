<div class="box box-info padding-1">
    <div class="box-body">
        <div class="alert alert-danger"><b>Dar acceso a:  </b>{{ $acceso->user->name }}</div>
        <div class="form-group">
            {{ Form::label('opcion') }}
            {{ Form::text('opcion', $acceso->opcion, ['class' => 'form-control' . ($errors->has('opcion') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('opcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            <select class="form-select" name="estado" id="estado">
                <option value="Habilitado" @if(old('estado', $acceso->estado) === 'Habilitado')  selected @endif>Habilitado</option>
                <option value="Deshabilitado" @if(old('estado', $acceso->estado) === 'Deshabilitado')  selected @endif>Deshabilitado</option>
            </select>
<<<<<<< HEAD
            {{ Form::hidden('id', $acceso->user_id, ['class' => 'form-control']) }}{{ Form::hidden('id', $acceso->user_id, ['class' => 'form-control']) }}
=======
<<<<<<< HEAD
            {{ Form::hidden('id', $acceso->user_id, ['class' => 'form-control']) }}
=======
<<<<<<< HEAD
            {{ Form::hidden('id', $acceso->user_id, ['class' => 'form-control']) }}
=======
>>>>>>> d030ea51c7a277a91de4a10625f09008a194c681
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
>>>>>>> 06922fc0224a1f4dd5fb1d040b387825a943b30e
        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="{{ route('accesos.index') }}" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
