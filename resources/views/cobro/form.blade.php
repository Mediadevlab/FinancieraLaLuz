<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row justify-content-center">
            <!-- inputs -->
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Código de préstamo</label>
                        <select name="" id="" class="form-control">
                            <option value="selected"> -- Escoga el código -- </option>
                            @foreach ( $prestamos as $prestamo )
                                <option value="{{ $prestamo == 'id' }}">{{ $prestamo == 'codigo' }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Ingrese el código del recibo del pago</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="0000000000">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 mt-3">
                        {{ Form::label('total_cobro') }}
                        {{ Form::text('total_cobro', $cobro->total_cobro, ['class' => 'form-control' . ($errors->has('total_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Total Cobro']) }}
                        {!! $errors->first('total_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        {{ Form::label('fecha_cobro') }}
                        {{ Form::date('fecha_cobro', $cobro->fecha_cobro, ['class' => 'form-control' . ($errors->has('fecha_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cobro']) }}
                        {!! $errors->first('fecha_cobro', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
            <!-- fotografia -->
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4" style="margin-left: 4px;">
                <div class="form-group">
                    <hr>
                    <div>
                        <img class="img-thumbnail" id="imagenSeleccionada" style="max-height: 200px;">
                    </div>
                    <label class="mb-1" for=""> Subir Comprobante</label>
                    <div class="flex flex-col items-center justify-center pt-7">
                        <!--<p class="mb-1">Seleccione la imagen</p>-->
                        <input type="file" name="" id="imagen" class="hidden" value="{{ old('') }}">
                        <!--<input type="text" name="Emp_Foto" class="form-control">-->
                    </div>
                    <div class="col-md-12">
                        <div class="alert alert-warning text-center mt-4" role="alert">
                            <label for=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>Carga unicamente 1 fotografía</label>
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
</div>