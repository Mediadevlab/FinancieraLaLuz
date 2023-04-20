<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">

            <!--Info Cliente-->

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('DNI') }}
                    {{ Form::number('dni', $cliente->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('RTN') }}
                    {{ Form::number('rtn', $cliente->rtn, ['class' => 'form-control' . ($errors->has('rtn') ? ' is-invalid' : ''), 'placeholder' => 'Rtn']) }}
                    {!! $errors->first('rtn', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Teléfono') }}
                    {{ Form::number('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Trabajo') }}
                    {{ Form::text('trabajo', $cliente->trabajo, ['class' => 'form-control' . ($errors->has('trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo']) }}
                    {!! $errors->first('trabajo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Teléfono de Trabajo') }}
                    {{ Form::number('tel_trabajo', $cliente->tel_trabajo, ['class' => 'form-control' . ($errors->has('tel_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Tel Trabajo']) }}
                    {!! $errors->first('tel_trabajo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Dirección') }}
                    {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Dirección del Trabajo') }}
                    {{ Form::text('dir_trabajo', $cliente->dir_trabajo, ['class' => 'form-control' . ($errors->has('dir_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trabajo']) }}
                    {!! $errors->first('dir_trabajo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fecha de Nacimiento') }}
                    {{ Form::date('fechaNac', $cliente->fechaNac, ['class' => 'form-control' . ($errors->has('fechaNac') ? ' is-invalid' : ''), 'placeholder' => 'Fechanac']) }}
                    {!! $errors->first('fechaNac', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="">
                        <option selected>Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>

            <!--Info Aval-->

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    {{ Form::label('Nombre del Aval') }}
                    {{ Form::text('nom_aval', $cliente->nom_aval, ['class' => 'form-control' . ($errors->has('nom_aval') ? ' is-invalid' : ''), 'placeholder' => 'Nom Aval']) }}
                    {!! $errors->first('nom_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('DNI Aval') }}
                    {{ Form::number('dni_aval', $cliente->dni_aval, ['class' => 'form-control' . ($errors->has('dni_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dni Aval']) }}
                    {!! $errors->first('dni_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('RTN Aval') }}
                    {{ Form::number('rtn_aval', $cliente->rtn_aval, ['class' => 'form-control' . ($errors->has('rtn_aval') ? ' is-invalid' : ''), 'placeholder' => 'Rtn Aval']) }}
                    {!! $errors->first('rtn_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Correo Electrónico') }}
                    {{ Form::email('correo', $cliente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Dirección del Aval') }}
                    {{ Form::text('dir_aval', $cliente->dir_aval, ['class' => 'form-control' . ($errors->has('dir_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dir Aval']) }}
                    {!! $errors->first('dir_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Teléfono de Casa del Aval') }}
                    {{ Form::number('telCasa_aval', $cliente->telCasa_aval, ['class' => 'form-control' . ($errors->has('telCasa_aval') ? ' is-invalid' : ''), 'placeholder' => 'Tel casa Aval']) }}
                    {!! $errors->first('telCasa_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Dirección Trabajo del Aval') }}
                    {{ Form::text('dirTrabajo_aval', $cliente->dirTrabajo_aval, ['class' => 'form-control' . ($errors->has('dirTrabajo_aval') ? ' is-invalid' : ''), 'placeholder' => 'Dirtrabajo Aval']) }}
                    {!! $errors->first('dirTrabajo_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Teléfono de Trabajo del Aval') }}
                    {{ Form::number('telTrabajo_aval', $cliente->telTrabajo_aval, ['class' => 'form-control' . ($errors->has('telTrabajo_aval') ? ' is-invalid' : ''), 'placeholder' => 'Teltrabajo Aval']) }}
                    {!! $errors->first('telTrabajo_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fecha de Nacimiento del Aval') }}
                    {{ Form::date('fechaNac_aval', $cliente->fechaNac_aval, ['class' => 'form-control' . ($errors->has('fechaNac_aval') ? ' is-invalid' : ''), 'placeholder' => 'Fechanac Aval']) }}
                    {!! $errors->first('fechaNac_aval', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <!--fotografias croquis casa y trabajo-->

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">

                <!-- foto cliente -->
                <div class="form-group">
                    <label for="foto_cliente">Fotografía Cliente</label>
                    <input type="file" name="foto_cliente" class="form-control" id="foto_cliente">
                </div>

                <br>
                <!-- foto casa -->
                <div class="form-group">
                    <label for="croquis_casa">Fotografía Croquis Casa</label>
                    <input type="file" name="croquis_casa" class="form-control" id="croquis_casa">
                </div>

                <br>
                <!-- foto trabajo -->
                <div class="form-group">
                    <label for="croquis_trabajo">Fotografía Croquis Trabajo</label>
                    <input type="file" name="croquis_trabajo" class="form-control" id="croquis_trabajo">
                </div>
                
            </div>
        </div>

    </div>
    <!-- botones -->
    <hr style="margin-top: 40px;">
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save" style="margin-right: 3px;"></i> Guardar</button>
    </div>

</div>