<div class="box box-info padding-1">
    <div class="box-body">
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4">
                <h1 class="text-danger">&#9312; Entrada</h1>
                <div class="form-group">
                    <?php echo Form::label('Personal'); ?>

                    <?php echo Form::select('personal_id',$personal,(isset($asistencia->personal_id))? $asistencia->personal_id:null, ['class' => 'form-select form-select','id'=>'personal_id',($accion=='insertar')? '':'disabled']); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('lugar_de_trabajo')); ?>

                    <?php echo Form::select('lugartrabajo_id',$lugartrabajo,($asistencia->lugartrabajo_id)? $asistencia->lugartrabajo_id:null, ['class' => 'form-select','id'=>'lugartrabajo_id',($accion=='insertar')? '':'disabled']); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('fecha_asitencia')); ?>

                    <?php echo e(Form::date('fecha_asitencia', ($asistencia->fecha_asitencia)? $asistencia->fecha_asitencia:date('Y-m-d'), [($accion=='insertar')? 'readonly':'disabled','class' => 'form-control' . ($errors->has('fecha_asitencia') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('fecha_asitencia', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('hora_entrada')); ?>

                    <?php echo e(Form::time('hora_entrada', $asistencia->hora_entrada, [($accion=='insertar')? 'readonly':'disabled','id'=>'hora_entrada','class' => 'form-control' . ($errors->has('hora_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrada'])); ?>

                    <?php echo $errors->first('hora_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('lat_entrada')); ?>

                    <?php echo e(Form::text('lat_entrada', $asistencia->lat_entrada, ['id'=>'lat_entrada','class' => 'form-control' . ($errors->has('lat_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Lat Entrada','readonly'])); ?>

                    <?php echo $errors->first('lat_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('long_entrada')); ?>

                    <?php echo e(Form::text('long_entrada', $asistencia->long_entrada, ['id'=>'long_entrada','class' => 'form-control' . ($errors->has('long_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Long Entrada','readonly'])); ?>

                    <?php echo $errors->first('long_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('estado_entrada')); ?>

                    <?php echo e(Form::text('estado_entrada', ($asistencia->estado_entrada)? $asistencia->estado_entrada:'Sin_marcar', [($accion=='insertar')? 'readonly':'disabled','class' => 'form-control bg-danger text-white' . ($errors->has('estado_entrada') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('estado_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning mb-3">
                <div class="card-header">ASISTENCIA</div>
                <div class="card-body text-center">
                    <h5 class="card-title">Fecha y hora actual</h5>
                    <p class="card-text fs-1" id="resultado"></p>
                </div>
                </div>
                <div class="box-footer mt-2 text-center">
                    <?php if($accion == 'insertar'): ?>
                    <button type="submit" class="btn btn-primary btn-lg" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Marcar Inicio</button>
                    <?php else: ?>
                        <?php if($asistencia->lugartrabajo->horario->horas_descanso != 0): ?>
                        <a href="#" class="btn btn-secondary btn-lg mb-2" onclick="horario_entrada('<?php echo e($asistencia->lugartrabajo->horario->horario_ini); ?>','<?php echo e($asistencia->lugartrabajo->horario->horario_ini1); ?>','<?php echo e($asistencia->lugartrabajo->horario->horario_fin1); ?>')" id="salida"> Salida</a>
                        <a href="#" class="btn btn-secondary btn-lg mb-2" onclick="horario_salida('<?php echo e($asistencia->lugartrabajo->horario->horario_fin1); ?>')" id="entrada"> Entrada</a><br>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary btn-lg" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Marcar Fin</button>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-4">
                <h1 class="text-danger">&#9313; Salida</h1>
                <div class="form-group">
                    <?php echo e(Form::label('hora_salida')); ?>

                    <?php echo e(Form::time('hora_salida', $asistencia->hora_salida, ['readonly','id'=>'hora_salida','class' => 'form-control' . ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida'])); ?>

                    <?php echo $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('lat_salida')); ?>

                    <?php echo e(Form::text('lat_salida', $asistencia->lat_salida, ['readonly','id'=>'lat_salida','class' => 'form-control' . ($errors->has('lat_salida') ? ' is-invalid' : ''), 'placeholder' => 'Lat Salida'])); ?>

                    <?php echo $errors->first('lat_salida', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('long_salida')); ?>

                    <?php echo e(Form::text('long_salida', $asistencia->long_salida, ['readonly','id'=>'long_salida','class' => 'form-control' . ($errors->has('long_salida') ? ' is-invalid' : ''), 'placeholder' => 'Long Salida'])); ?>

                    <?php echo $errors->first('long_salida', '<div class="invalid-feedback">:message</div>'); ?>

                </div>

                <div class="form-group">
                    <?php echo e(Form::label('estado_salida')); ?>

                    <?php echo e(Form::text('estado_salida', ($asistencia->estado_salida)? $asistencia->estado_salida:'Sin_marcar', ['readonly','class' => 'form-control bg-success text-white' . ($errors->has('estado_salida') ? ' is-invalid' : ''), 'placeholder' => 'Estado Salida'])); ?>

                    <?php echo $errors->first('estado_salida', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::hidden('tardanza', $asistencia->tardanza, ['class' => 'form-control' . ($errors->has('tardanza') ? ' is-invalid' : ''), 'placeholder' => 'Tardanza'])); ?>

                    <?php echo $errors->first('tardanza', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::hidden('tiempo_laborado', $asistencia->tiempo_laborado, ['class' => 'form-control' . ($errors->has('tiempo_laborado') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Laborado'])); ?>

                    <?php echo $errors->first('tiempo_laborado', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('tipo_asistencia')); ?>

                    <?php echo e(Form::text('tipo_asistencia', ($asistencia->tipo_asistencia)? $asistencia->tipo_asistencia:'Gps', ['readonly','class' => 'form-control' . ($errors->has('tipo_asistencia') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Asistencia'])); ?>

                    <?php echo $errors->first('tipo_asistencia', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::hidden('estado_final', ($asistencia->estado_final)? $asistencia->estado_final:'Ausente', ['class' => 'form-control' . ($errors->has('estado_final') ? ' is-invalid' : ''), 'placeholder' => 'Estado Final'])); ?>

                    <?php echo e(Form::hidden('asistencia_id', ($asistencia->id)? $asistencia->id:'0', ['class' => 'form-control'])); ?>

                    <?php echo $errors->first('estado_final', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function(){
        getLocation();
        timedUpdate();
    })();

    function timedUpdate () {
        moment.locale('es');
        let hora = moment().format('MMMM Do YYYY, HH:mm:ss');
        let hora_corta = moment().format('HH:mm');
        document.getElementById("resultado").innerText = hora;
        <?php if($accion == 'insertar'): ?>
            document.getElementById("hora_entrada").value = hora_corta;
        <?php else: ?>
            document.getElementById("hora_salida").value = hora_corta;
        <?php endif; ?>

        setTimeout(timedUpdate, 1000);
    }

    function getLocation(){
        navigator.geolocation.getCurrentPosition(onSuccess);
    }
    function onSuccess(position){
        <?php if($accion == 'insertar'): ?>
            document.getElementById("lat_entrada").value = position.coords.latitude;
            document.getElementById("long_entrada").value = position.coords.longitude;
        <?php else: ?>
            document.getElementById("lat_salida").value = position.coords.latitude;
            document.getElementById("long_salida").value = position.coords.longitude;
        <?php endif; ?>


    }
    function horario_entrada(ini,sal,ing){
        let hora_act = moment().format('HH:mm:ss');
        var opcion = confirm("Esta seguro de marcar SALIDA");
        if (opcion == true) {
            hora_actual = obtenerMinutos(hora_act);
            inicio = obtenerMinutos(ini);
            salida = obtenerMinutos(sal);
            ingreso = obtenerMinutos(ing);

            if(hora_actual > inicio && hora_actual < salida){
                alert("Salida temprana");
            }
            else if(hora_actual > salida && hora_actual < ingreso){
                alert("Marcado correcto");
                document.getElementById("salida").style.visibility = "hidden";
            }
            else{
                alert("Usted est?? fuera de horario");
            }
        }
    }
    function horario_salida(sal){
        let hora_act = moment().format('HH:mm:ss');
        var opcion = confirm("Esta seguro de marcar ENTRADA");
        if (opcion == true) {
            hora_actual = obtenerMinutos(hora_act);
            ingreso = obtenerMinutos(sal);
            ingreso_10 = obtenerMinutos(sal) + 10;
            ingreso_60 = obtenerMinutos(sal) + 60;

            if(hora_actual > ingreso && hora_actual < ingreso_10){
                alert("Marcado correcto");
                document.getElementById("entrada").style.visibility = "hidden";
            }
            else if(hora_actual > ingreso_10 && hora_actual <= ingreso_60){
                alert("Ingreso con tardanza");
            }
            else {
                alert("Usted esta fuera de horario");
            }
        }
    }
    function obtenerMinutos(hora){
        var spl = hora.split(":");
        return parseInt(spl[0])*60+parseInt(spl[1]);
    }
    </script>

<?php /**PATH C:\xampp\htdocs\constructora\constructora\resources\views/asistencia/form.blade.php ENDPATH**/ ?>