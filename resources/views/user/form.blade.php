<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo Electrónico') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electrónico']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('contraseña', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <label for="roles" class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-form-label mt-3">Roles</label>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <table class="table mt-3">
                                <tbody>
                                    @foreach ($roles as $id => $role)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                                            value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : '' }}>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </input>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                {{$role}}
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