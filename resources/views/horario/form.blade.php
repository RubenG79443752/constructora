<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $horario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_ini') }}
            {{ Form::time('horario_ini', $horario->horario_ini, ['class' => 'form-control' . ($errors->has('horario_ini') ? ' is-invalid' : ''), 'placeholder' => 'Horario Ini']) }}
            {!! $errors->first('horario_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_fin') }}
            {{ Form::time('horario_fin', $horario->horario_fin, ['class' => 'form-control' . ($errors->has('horario_fin') ? ' is-invalid' : ''), 'placeholder' => 'Horario Fin']) }}
            {!! $errors->first('horario_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas descanso') }}
            {{ Form::number('horas_descanso', $horario->horas_descanso, ['class' => 'form-control' . ($errors->has('horas_descanso') ? ' is-invalid' : ''), 'placeholder' => '...']) }}
            {!! $errors->first('horas_descanso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="{{ route('horarios.index') }}" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
