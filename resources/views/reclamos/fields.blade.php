<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Documento', 'Documento:') !!}
    {!! Form::number('Documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Correo', 'Correo:') !!}
    {!! Form::text('Correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Direccion', 'Direccion:') !!}
    {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefono', 'Telefono:') !!}
    {!! Form::number('Telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Motivo', 'Motivo:') !!}
    {!! Form::textarea('Motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('reclamos.index') !!}" class="btn btn-default">Cancel</a>
</div>
