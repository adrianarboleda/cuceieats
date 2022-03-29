<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::text('categoría', $producto->categoría, ['class' => 'form-control' . ($errors->has('categoría') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('categoría', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vegano') }}
            {{ Form::text('vegano', $producto->vegano, ['class' => 'form-control' . ($errors->has('vegano') ? ' is-invalid' : ''), 'placeholder' => 'Vegano']) }}
            {!! $errors->first('vegano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vegetariano') }}
            {{ Form::text('vegetariano', $producto->vegetariano, ['class' => 'form-control' . ($errors->has('vegetariano') ? ' is-invalid' : ''), 'placeholder' => 'Vegetariano']) }}
            {!! $errors->first('vegetariano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tienda') }}
            {{ Form::text('id_tienda', $producto->id_tienda, ['class' => 'form-control' . ($errors->has('id_tienda') ? ' is-invalid' : ''), 'placeholder' => 'Id Tienda']) }}
            {!! $errors->first('id_tienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deshabilitado') }}
            {{ Form::text('deshabilitado', $producto->deshabilitado, ['class' => 'form-control' . ($errors->has('deshabilitado') ? ' is-invalid' : ''), 'placeholder' => 'Deshabilitado']) }}
            {!! $errors->first('deshabilitado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>