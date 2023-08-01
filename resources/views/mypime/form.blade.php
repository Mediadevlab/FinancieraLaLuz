<div class="box box-info padding-1">
    <div class="box-body ">

        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">

                <div class="form-group">
                    {{ Form::label('nombre') }}
                    {{ Form::text('nombre', $mypime->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dni') }}
                    {{ Form::text('dni', $mypime->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('rtn') }}
                    {{ Form::text('rtn', $mypime->rtn, ['class' => 'form-control' . ($errors->has('rtn') ? ' is-invalid' : ''), 'placeholder' => 'Rtn']) }}
                    {!! $errors->first('rtn', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_cel') }}
                    {{ Form::text('tel_cel', $mypime->tel_cel, ['class' => 'form-control' . ($errors->has('tel_cel') ? ' is-invalid' : ''), 'placeholder' => 'Tel Cel']) }}
                    {!! $errors->first('tel_cel', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_casa') }}
                    {{ Form::text('tel_casa', $mypime->tel_casa, ['class' => 'form-control' . ($errors->has('tel_casa') ? ' is-invalid' : ''), 'placeholder' => 'Tel Casa']) }}
                    {!! $errors->first('tel_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tel_tra') }}
                    {{ Form::text('tel_tra', $mypime->tel_tra, ['class' => 'form-control' . ($errors->has('tel_tra') ? ' is-invalid' : ''), 'placeholder' => 'Tel Tra']) }}
                    {!! $errors->first('tel_tra', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    {{ Form::label('Dir_Casa') }}
                    {{ Form::text('dir_casa', $mypime->dir_casa, ['class' => 'form-control' . ($errors->has('dir_casa') ? ' is-invalid' : ''), 'placeholder' => 'Dir Casa']) }}
                    {!! $errors->first('dir_casa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('dir_mypime') }}
                    {{ Form::text('dir_mypime', $mypime->dir_mypime, ['class' => 'form-control' . ($errors->has('dir_mypime') ? ' is-invalid' : ''), 'placeholder' => 'Dir Mypime']) }}
                    {!! $errors->first('dir_mypime', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_nac') }}
                    {{ Form::text('fecha_nac', $mypime->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
                    {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('ciudad') }}
                    {{ Form::text('ciudad', $mypime->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                    {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('correo') }}
                    {{ Form::text('correo', $mypime->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Codigo Prestamo') }}
                    {{ Form::text('prestamo_id', $mypime->prestamo_id, ['class' => 'form-control' . ($errors->has('prestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Prestamo']) }}
                    {!! $errors->first('prestamo_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <!-- foto cliente -->
                <div class="form-group">
                    <label for="foto">Fotografías Cliente</label>
                    <input type="file" name="foto" class="form-control" id="foto">
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