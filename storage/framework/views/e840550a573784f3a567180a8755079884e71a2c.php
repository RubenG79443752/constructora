<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <?php echo e(Form::label('descripcion')); ?>

                    <?php echo e(Form::text('descripcion', $lugartrabajo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion'])); ?>

                    <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('latitud')); ?>

                    <?php echo e(Form::text('latitud', isset($lugartrabajo->latitud)? $lugartrabajo->latitud:0, ['id'=>'latitud','class' => 'form-control' . ($errors->has('latitud') ? ' is-invalid' : '')])); ?>

                    <?php echo $errors->first('latitud', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('longitud')); ?>

                    <?php echo e(Form::text('logitud', isset($lugartrabajo->logitud)? $lugartrabajo->logitud:0, ['id'=>'longitud','class' => 'form-control' . ($errors->has('logitud') ? ' is-invalid' : '')])); ?>

                    <?php echo $errors->first('logitud', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('radio')); ?>

                    <?php echo e(Form::text('radio', 100, ['class' => 'form-control' . ($errors->has('radio') ? ' is-invalid' : '')])); ?>

                    <?php echo $errors->first('radio', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    
                    <?php echo e(Form::hidden('apertura_marcado', isset($lugartrabajo->apertura_marcado)? $lugartrabajo->apertura_marcado:'06:00', ['class' => 'form-control' . ($errors->has('apertura_marcado') ? ' is-invalid' : ''), 'placeholder' => 'Apertura Marcado'])); ?>

                    <?php echo $errors->first('apertura_marcado', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    
                    <?php echo e(Form::hidden('cierre_marcado', isset($lugartrabajo->cierre_marcado)? $lugartrabajo->cierre_marcado:'23:59', ['class' => 'form-control' . ($errors->has('cierre_marcado') ? ' is-invalid' : ''), 'placeholder' => 'Cierre Marcado'])); ?>

                    <?php echo $errors->first('cierre_marcado', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
                <div class="form-group">
                    
                    <?php echo e(Form::hidden('minutos_espera', isset($lugartrabajo->minutos_espera)? $lugartrabajo->minutos_espera:10, ['class' => 'form-control' . ($errors->has('minutos_espera') ? ' is-invalid' : ''), 'placeholder' => 'Minutos Espera'])); ?>

                    <?php echo $errors->first('minutos_espera', '<div class="invalid-feedback">:message</div>'); ?>

                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php echo e(Form::label('inicio_desde')); ?>

                            <?php echo e(Form::time('inicio_desde', isset($lugartrabajo->inicio_desde)? $lugartrabajo->inicio_desde:'08:00', ['class' => 'form-control' . ($errors->has('inicio_desde') ? ' is-invalid' : '')])); ?>

                            <?php echo $errors->first('inicio_desde', '<div class="invalid-feedback">:message</div>'); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(Form::label('inicio_hasta')); ?>

                        <?php echo e(Form::time('inicio_hasta', isset($lugartrabajo->inicio_hasta)? $lugartrabajo->inicio_hasta:'08:10', ['class' => 'form-control' . ($errors->has('inicio_hasta') ? ' is-invalid' : '')])); ?>

                        <?php echo $errors->first('inicio_hasta', '<div class="invalid-feedback">:message</div>'); ?>

                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(Form::label('fin_desde')); ?>

                        <?php echo e(Form::time('fin_desde', isset($lugartrabajo->fin_desde)? $lugartrabajo->fin_desde:'18:00', ['class' => 'form-control' . ($errors->has('fin_desde') ? ' is-invalid' : '')])); ?>

                        <?php echo $errors->first('fin_desde', '<div class="invalid-feedback">:message</div>'); ?>

                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <?php echo e(Form::label('fin_hasta')); ?>

                        <?php echo e(Form::time('fin_hasta', isset($lugartrabajo->fin_hasta)? $lugartrabajo->fin_hasta:'19:00', ['class' => 'form-control' . ($errors->has('fin_hasta') ? ' is-invalid' : '')])); ?>

                        <?php echo $errors->first('fin_hasta', '<div class="invalid-feedback">:message</div>'); ?>

                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <?php echo Form::label('Horario'); ?>

                            <?php echo Form::select('horario_id',$horarios,(isset($lugartrabajo->horario_id))? $lugartrabajo->horario_id:null, ['class' => 'form-select form-select-sm','id'=>'horario_id']); ?>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <?php echo e(Form::label('turno')); ?>

                            <select class="form-select form-select-sm" name="turno" id="turno">
                                <option value="Dia" <?php if(old('turno', $lugartrabajo->turno) === 'Dia'): ?>  selected <?php endif; ?>>Dia</option>
                                <option value="Noche" <?php if(old('turno', $lugartrabajo->turno) === 'Noche'): ?>  selected <?php endif; ?>>Noche</option>
                                <option value="Medio dia" <?php if(old('turno', $lugartrabajo->turno) === 'Medio dia'): ?>  selected <?php endif; ?>>Medio dia</option>
                                <option value="Continuo" <?php if(old('turno', $lugartrabajo->turno) === 'Continuo'): ?>  selected <?php endif; ?>>Continuo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    
                    <?php echo e(Form::hidden('dias_trabajo', 'Lun,Mar,Mie,Jue,Vie,Sab,Dom', ['class' => 'form-control' . ($errors->has('dias_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Dias Trabajo'])); ?>

                    <?php echo $errors->first('dias_trabajo', '<div class="invalid-feedback">:message</div>'); ?>


                    

                </div>
                

                <div class="form-group">
                    <?php echo Form::select('user_id',$usuarios,(isset($lugartrabajo->user_id))? $lugartrabajo->user_id:null, ['hidden','class' => 'form-select form-select-sm','id'=>'user_id']); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('estado')); ?>

                    <select class="form-select form-select-sm" name="estado" id="estado">
                        <option value="Activo" <?php if(old('estado', $lugartrabajo->estado) === 'Activo'): ?>  selected <?php endif; ?>>Activo</option>
                        <option value="Inactivo" <?php if(old('estado', $lugartrabajo->estado) === 'Inactivo'): ?>  selected <?php endif; ?>>Inactivo</option>
                    </select>
                </div>

            </div>
            <div class="col-md-8">
                <div id="divMap" style="height:100%"></div>
            </div>
        </div>


    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('lugartrabajos.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
//var items = ($('.select2-multiple').val().split(','));
$(document).ready(function() {
            // Select2 Multiple

            // $('.select2-multiple').val(['Lun', 'Mar','Mie','Jue','Vie']);
            // $('.select2-multiple').select2({
            //     multiple: true,
            //     placeholder: "Seleccionar",
            //     allowClear: true
            // });
            //$('.select2-multiple').val(items).trigger('change');

});
      function initialize() {
        // Configuración del mapa
        var mapProp = {
          center: new google.maps.LatLng(<?php echo e(isset($lugartrabajo->latitud)? $lugartrabajo->latitud:-19.58379189395981); ?>, <?php echo e(isset($lugartrabajo->logitud)? $lugartrabajo->logitud:-65.75680089176369); ?>),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Agregando el mapa al tag de id divMap
        var map = new google.maps.Map(document.getElementById("divMap"), mapProp);

        // Creando un marker en el mapa
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo e(isset($lugartrabajo->latitud)? $lugartrabajo->latitud:-19.58379189395981); ?>, <?php echo e(isset($lugartrabajo->logitud)? $lugartrabajo->logitud:-65.75680089176369); ?>),
          map: map,
          title: 'Ubicación por defecto',
          draggable: true //que el marcador se pueda arrastrar
        });

        // Registrando el evento drag, en este caso imprime
        // en consola la latitud y longitud
        google.maps.event.addListener(marker,'drag',function(event) {
          console.log(event.latLng.lat());
          document.getElementById("latitud").value = event.latLng.lat();
          document.getElementById("longitud").value = event.latLng.lng();
        });

      }

      // Inicializando el mapa cuando se carga la página
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/lugartrabajo/form.blade.php ENDPATH**/ ?>