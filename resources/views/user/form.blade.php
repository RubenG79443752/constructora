<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),'autofocus']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @if ($accion == 'insertar')
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $user->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : '')]) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '')]) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        <div class="form-group">
            <label>Rol</label>
            <select class="form-select" name="rol" id="rol">
                <option value="Administrador" @if(old('rol', $user->rol) === 'Administrador')  selected @endif>Administrador</option>
                <option value="Trabajador" @if(old('rol', $user->rol) === 'Trabajador')  selected @endif>Trabajador</option>
            </select>
        </div>
        <div class="form-group">
            <label>Estado</label>
            <select class="form-select" name="estado" id="estado">
                <option value="Activo" @if(old('estado', $user->estado) === 'Activo')  selected @endif>Activo</option>
                <option value="Inactivo" @if(old('estado', $user->estado) === 'Inactivo')  selected @endif>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
