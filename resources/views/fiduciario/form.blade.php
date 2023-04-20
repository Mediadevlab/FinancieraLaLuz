<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h4 style="font-weight: bold;">Información Cliente</h4>
                <hr>
                <div class="form-group">
                    {{ Form::label('código de préstamo') }}
                    {{ Form::text('prestamo_id ', $fiduciario->prestamo_id , ['class' => 'form-control' . ($errors->has('prestamo_id ') ? ' is-invalid' : ''), 'placeholder' => 'código de préstamo']) }}
                    {!! $errors->first('prestamo_id ', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('nombre') }}
                    {{ Form::text('nombre', $fiduciario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dni') }}
                    {{ Form::number('dni', $fiduciario->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('rtn') }}
                    {{ Form::number('rtn', $fiduciario->rtn, ['class' => 'form-control' . ($errors->has('rtn') ? ' is-invalid' : ''), 'placeholder' => 'Rtn']) }}
                    {!! $errors->first('rtn', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_cel') }}
                    {{ Form::number('tel_cel', $fiduciario->tel_cel, ['class' => 'form-control' . ($errors->has('tel_cel') ? ' is-invalid' : ''), 'placeholder' => 'Tel Cel']) }}
                    {!! $errors->first('tel_cel', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_casa') }}
                    {{ Form::number('tel_casa', $fiduciario->tel_casa, ['class' => 'form-control' . ($errors->has('tel_casa') ? ' is-invalid' : ''), 'placeholder' => 'Tel Casa']) }}
                    {!! $errors->first('tel_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_tra') }}
                    {{ Form::number('tel_tra', $fiduciario->tel_tra, ['class' => 'form-control' . ($errors->has('tel_tra') ? ' is-invalid' : ''), 'placeholder' => 'Tel Tra']) }}
                    {!! $errors->first('tel_tra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dir_casa') }}
                    {{ Form::textarea('dir_casa', $fiduciario->dir_casa, ['class' => 'form-control' . ($errors->has('dir_casa') ? ' is-invalid' : ''), 'placeholder' => 'Dir Casa']) }}
                    {!! $errors->first('dir_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dir_trabajo') }}
                    {{ Form::textarea('dir_trabajo', $fiduciario->dir_trabajo, ['class' => 'form-control' . ($errors->has('dir_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trabajo']) }}
                    {!! $errors->first('dir_trabajo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_nac') }}
                    {{ Form::date('fecha_nac', $fiduciario->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
                    {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('ciudad') }}
                    {{ Form::text('ciudad', $fiduciario->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                    {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('correo') }}
                    {{ Form::email('correo', $fiduciario->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <!-- foto cliente -->
                <div class="form-group">
                    <label for="foto">Fotografía Cliente</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h4 style="font-weight: bold;">Información Aval</h4>
                <hr>
                <div class="form-group">
                    {{ Form::label('nombre_aval') }}
                    {{ Form::text('nombre_aval', $fiduciario->nombre_aval, ['class' => 'form-control' . ($errors->has('nombre_aval') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Aval']) }}
                    {!! $errors->first('nombre_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dni_aval') }}
                    {{ Form::number('dni_aval', $fiduciario->dni_aval, ['class' => 'form-control' . ($errors->has('dni_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dni Aval']) }}
                    {!! $errors->first('dni_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('rtn_aval') }}
                    {{ Form::number('rtn_aval', $fiduciario->rtn_aval, ['class' => 'form-control' . ($errors->has('rtn_aval') ? ' is-invalid' : ''), 'placeholder' => 'Rtn Aval']) }}
                    {!! $errors->first('rtn_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_cel_aval') }}
                    {{ Form::number('tel_cel_aval', $fiduciario->tel_cel_aval, ['class' => 'form-control' . ($errors->has('tel_cel_aval') ? ' is-invalid' : ''), 'placeholder' => 'Tel Cel Aval']) }}
                    {!! $errors->first('tel_cel_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_casa_aval') }}
                    {{ Form::number('tel_casa_aval', $fiduciario->tel_casa_aval, ['class' => 'form-control' . ($errors->has('tel_casa_aval') ? ' is-invalid' : ''), 'placeholder' => 'Tel Casa Aval']) }}
                    {!! $errors->first('tel_casa_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_tra_aval') }}
                    {{ Form::number('tel_tra_aval', $fiduciario->tel_tra_aval, ['class' => 'form-control' . ($errors->has('tel_tra_aval') ? ' is-invalid' : ''), 'placeholder' => 'Tel Tra Aval']) }}
                    {!! $errors->first('tel_tra_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dir_casa_aval') }}
                    {{ Form::textarea('dir_casa_aval', $fiduciario->dir_casa_aval, ['class' => 'form-control' . ($errors->has('dir_casa_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dir Casa Aval']) }}
                    {!! $errors->first('dir_casa_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dir_trabajo_aval') }}
                    {{ Form::textarea('dir_trabajo_aval', $fiduciario->dir_trabajo_aval, ['class' => 'form-control' . ($errors->has('dir_trabajo_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trabajo Aval']) }}
                    {!! $errors->first('dir_trabajo_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_nac_aval') }}
                    {{ Form::date('fecha_nac_aval', $fiduciario->fecha_nac_aval, ['class' => 'form-control' . ($errors->has('fecha_nac_aval') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac Aval']) }}
                    {!! $errors->first('fecha_nac_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('ciudad_aval') }}
                    {{ Form::text('ciudad_aval', $fiduciario->ciudad_aval, ['class' => 'form-control' . ($errors->has('ciudad_aval') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Aval']) }}
                    {!! $errors->first('ciudad_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('correo_aval') }}
                    {{ Form::email('correo_aval', $fiduciario->correo_aval, ['class' => 'form-control' . ($errors->has('correo_aval') ? ' is-invalid' : ''), 'placeholder' => 'Correo Aval']) }}
                    {!! $errors->first('correo_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <!-- foto cliente -->
                <div class="form-group">
                    <label for="foto_aval">Fotografía Aval</label>
                    <input type="file" name="foto_aval" class="form-control" id="foto_aval">
                </div>
            </div>

        </div>

    </div>
    <!-- botones -->
    <hr style="margin-top: 40px;">
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save" style="margin-right: 3px;"></i> Guardar</button>
    </div>
    <!-- <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div> -->
</div>