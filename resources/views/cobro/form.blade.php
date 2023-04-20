<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row justify-content-center">
            <!-- inputs -->
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Buscar Cliente por Código de Préstamo</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Código de Recibo Banco</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('Nombre Completo') }}
                        {{ Form::text('total_cobro', $cobro->total_cobro, ['class' => 'form-control' . ($errors->has('total_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
                        <!-- {!! $errors->first('total_cobro', '<div class="invalid-feedback">:message</div>') !!} -->
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('Monto Préstamo') }}
                        {{ Form::text('total_cobro', $cobro->total_cobro, ['class' => 'form-control' . ($errors->has('total_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Monto Préstamo']) }}
                        <!-- {!! $errors->first('total_cobro', '<div class="invalid-feedback">:message</div>') !!} -->
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('total_cobro') }}
                        {{ Form::text('total_cobro', $cobro->total_cobro, ['class' => 'form-control' . ($errors->has('total_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Total Cobro']) }}
                        {!! $errors->first('total_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('fecha_cobro') }}
                        {{ Form::date('fecha_cobro', $cobro->fecha_cobro, ['class' => 'form-control' . ($errors->has('fecha_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cobro']) }}
                        {!! $errors->first('fecha_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('A Capital') }}
                        {{ Form::text('fecha_cobro', $cobro->fecha_cobro, ['class' => 'form-control' . ($errors->has('fecha_cobro') ? ' is-invalid' : ''), 'placeholder' => 'A Capital']) }}
                        {!! $errors->first('fecha_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        {{ Form::label('A Interés') }}
                        {{ Form::text('fecha_cobro', $cobro->fecha_cobro, ['class' => 'form-control' . ($errors->has('fecha_cobro') ? ' is-invalid' : ''), 'placeholder' => 'A Interés']) }}
                        {!! $errors->first('fecha_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
            <!-- fotografia -->
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-4">
                <div class="form-group">
                    <div>
                        <img class="img-thumbnail" id="imagenSeleccionada" style="max-height: 200px;">
                    </div>
                    <label class="mb-1" for=""> Subir Comprobante</label>
                    <div class="flex flex-col items-center justify-center pt-7">
                        <!--<p class="mb-1">Seleccione la imagen</p>-->
                        <input type="file" name="" id="imagen" class="hidden" value="{{ old('') }}">
                        <!--<input type="text" name="Emp_Foto" class="form-control">-->
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
</div>