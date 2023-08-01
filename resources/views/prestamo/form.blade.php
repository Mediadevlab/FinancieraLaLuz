<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-group mt-2">
                    <label for="">Buscar Cliente por ID</label>
                    <div class="input-group">
                        <input type="text" id="dni" class="form-control">
                        <!-- <input type="hiddes" name="id" id="cliente"> -->
                        <button class="btn btn-primary" type="button" id="btn_buscar"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-group mt-2">
                    <label for="id">DNI</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group mt-2">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
        </div>

        <hr style="margin-top: 40px;">

        <div class="row">
            
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group mt-2">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option selected>Seleccione tipo de préstamo...</option>
                        <option value="Inactivo">Hipotecario</option>
                        <option value="Inactivo">Prendatario</option>
                        <option value="Inactivo">Fiduciario</option>
                        <option value="Inactivo">Mypime</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Monto de Capital') }}
                    {{ Form::number('capital', $prestamo->capital, ['class' => 'form-control' . ($errors->has('capital') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Capital', 'id' => 'cr_monto']) }}
                    {!! $errors->first('capital', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('tipo_tasa') }}
                    {{ Form::number('tipo_tasa', $prestamo->tipo_tasa, ['class' => 'form-control' . ($errors->has('tipo_tasa') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese tasa', 'id' => 'in_monto']) }}
                    {!! $errors->first('tipo_tasa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Plazo ( Calculado en meses )') }}
                    {{ Form::number('plazo', $prestamo->cuota, ['class' => 'form-control' . ($errors->has('plazo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese plazo', 'id' => 'cuota']) }}
                    {!! $errors->first('plazo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    <label for="forma_pago">Forma de Pago</label>
                    <select class="form-control" name="forma_pago" id="forma_pago">
                        <option selected>Selecciones forma de pago...</option>
                        <option value="Inactivo">Semanal</option>
                        <option value="Inactivo">Quincenal</option>
                        <option value="Inactivo">Mensual</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group mt-2">
                    {{ Form::label('fecha_solicitud') }}
                    {{ Form::date('fecha_solicitud', $prestamo->fecha_solicitud, ['class' => 'form-control' . ($errors->has('fecha_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
                    {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('fecha_inicio') }}
                    {{ Form::date('fecha_inicio', $prestamo->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
                    {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('fecha_fin') }}
                    {{ Form::date('fecha_fin', $prestamo->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
                    {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group mt-2">
                    {{ Form::label('cuota') }}
                    {{ Form::number('cuota', $prestamo->cuota, ['class' => 'form-control' . ($errors->has('cuota') ? ' is-invalid' : ''), 'placeholder' => 'Cuota' , 'id' => 'valor_cuota', ('disabled')]) }}
                    {!! $errors->first('cuota', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Interes') }}
                    {{ Form::number('interes', $prestamo->interes, ['class' => 'form-control' . ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes', 'id' => 'valor_interes', ('disabled')]) }}
                    {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Total') }}
                    {{ Form::number('total', $prestamo->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total', 'id' => 'monto_total', ('disabled')]) }}
                    {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

        </div>
    </div>

    <!-- botones -->
    <hr style="margin-top: 40px;">
    <div class="box-footer mt20 text-center">
        <button id="registrar_prestamo" type="submit" class="btn btn-success mt-3"><i class="fa fa-save" style="margin-right:4px;"></i>Generar</button>
        <a id="calcular" class="mt-3 btn btn-outline-primary"><i class="fa fa-calculator" style="margin-right:4px;"></i>Calcular</a>
        <!-- <a class="mt-3 btn btn-outline-secondary" id="btnCalcularPrestamo"><i class="fa fa-calculator" style="margin-right:4px;"></i>Simular</a> -->
    </div>
</div>