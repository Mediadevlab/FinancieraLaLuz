<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h4 style="font-weight: bold;">Información Cliente</h4>
                <hr>

                <div class="form-group">
                    {{ Form::label('nombre completo') }}
                    {{ Form::text('nombre', $prendario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('DNI') }}
                    {{ Form::number('dni', $prendario->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('RTN') }}
                    {{ Form::number('rtn', $prendario->rtn, ['class' => 'form-control' . ($errors->has('rtn') ? ' is-invalid' : ''), 'placeholder' => 'Rtn']) }}
                    {!! $errors->first('rtn', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('celular') }}
                    {{ Form::number('tel_cel', $prendario->tel_cel, ['class' => 'form-control' . ($errors->has('tel_cel') ? ' is-invalid' : ''), 'placeholder' => 'Tel Cel']) }}
                    {!! $errors->first('tel_cel', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('teléfono_casa') }}
                    {{ Form::number('tel_casa', $prendario->tel_casa, ['class' => 'form-control' . ($errors->has('tel_casa') ? ' is-invalid' : ''), 'placeholder' => 'Tel Casa']) }}
                    {!! $errors->first('tel_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('teléfono_trabajo') }}
                    {{ Form::number('tel_tra', $prendario->tel_tra, ['class' => 'form-control' . ($errors->has('tel_tra') ? ' is-invalid' : ''), 'placeholder' => 'Tel Tra']) }}
                    {!! $errors->first('tel_tra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dirección_casa') }}
                    {{ Form::textarea('dir_casa', $prendario->dir_casa, ['class' => 'form-control' . ($errors->has('dir_casa') ? ' is-invalid' : ''), 'placeholder' => 'Dir Casa']) }}
                    {!! $errors->first('dir_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('dirección_trabajo') }}
                    {{ Form::textarea('dir_trabajo', $prendario->dir_trabajo, ['class' => 'form-control' . ($errors->has('dir_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trabajo']) }}
                    {!! $errors->first('dir_trabajo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_nacimiento') }}
                    {{ Form::date('fecha_nac', $prendario->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
                    {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('ciudad') }}
                    {{ Form::text('ciudad', $prendario->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                    {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('correo') }}
                    {{ Form::email('correo', $prendario->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <!-- foto cliente -->
                <div class="form-group">
                    <label for="foto">Fotografía Cliente</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning text-center mt-4" role="alert">
                                <label for=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>Carga unicamente de 1 fotografía</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h4 style="font-weight: bold;">Información Vehículo</h4>
                <hr>
                <div class="form-group">
                    {{ Form::label('descripción_vehículo') }}
                    {{ Form::textarea('desc_vehiculo', $prendario->desc_vehiculo, ['class' => 'form-control' . ($errors->has('desc_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Desc Vehiculo']) }}
                    {!! $errors->first('desc_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('placa') }}
                    {{ Form::number('placa', $prendario->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
                    {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('color') }}
                    {{ Form::text('color', $prendario->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
                    {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('modelo') }}
                    {{ Form::text('modelo', $prendario->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
                    {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('marca') }}
                    {{ Form::text('marca', $prendario->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
                    {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('año') }}
                    {{ Form::number('anio', $prendario->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
                    {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('documentación') }}
                    {{ Form::textarea('documentacion', $prendario->documentacion, ['class' => 'form-control' . ($errors->has('documentacion') ? ' is-invalid' : ''), 'placeholder' => 'Documentacion']) }}
                    {!! $errors->first('documentacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <!-- foto vehiculo -->
                <div class="form-group">
                    <label for="foto_vehiculo">Fotografía Vehículo</label>
                    <input type="file" name="foto_vehiculo" class="form-control" id="foto_vehiculo">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning text-center mt-4" role="alert">
                                <label for=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>Carga mínima de 5 fotografías</label>
                            </div>
                        </div>
                    </div>
                </div>
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