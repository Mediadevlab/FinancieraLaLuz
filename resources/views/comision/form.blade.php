<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    {{ Form::label('pago') }}
                    {{ Form::text('pago', $comision->pago, ['class' => 'form-control' . ($errors->has('pago') ? ' is-invalid' : ''), 'placeholder' => 'Pago']) }}
                    {!! $errors->first('pago', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>



        </div>
        <!-- botones -->
        <!-- <hr style="margin-top: 40px;">
        <div class="box-footer mt20 text-center">
            <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save" style="margin-right: 3px;"></i> Guardar</button>
        </div> -->
    </div>