<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="form-group">
                {{ Form::label('Nombre') }}
                {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Origen') }}
                {{ Form::text('guard_name', $role->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
                {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row mt-3">
            <label for="name" class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label mt-3">Permisos</label>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <table class="table mt-3">
                                <tbody>

                                    @foreach ($permissions as $id => $permission)

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <div class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]"
                                                            value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : '' }} >
                                                        <span class="form-check-sign">
                                                            <span class="check">

                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $permission }}
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>
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