<table class="table table-responsive" id="reclamos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Motivo</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reclamos as $reclamos)
        <tr>
            <td>{!! $reclamos->Nombre !!}</td>
            <td>{!! $reclamos->Documento !!}</td>
            <td>{!! $reclamos->Correo !!}</td>
            <td>{!! $reclamos->Direccion !!}</td>
            <td>{!! $reclamos->Telefono !!}</td>
            <td>{!! $reclamos->Motivo !!}</td>
            <td>
                {!! Form::open(['route' => ['reclamos.destroy', $reclamos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reclamos.show', [$reclamos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reclamos.edit', [$reclamos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Se eliminará el registro de manera permanente, ¿desea continuar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>