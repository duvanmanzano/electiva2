@extends('layouts.app')

@section('css')
    <style>
        .error{
            color: red;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Reclamos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reclamos, ['route' => ['reclamos.update', $reclamos->id], 'method' => 'patch', 'id' => 'frmEditar']) !!}

                        @include('reclamos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
    <script>
        $("#frmEditar").validate({
            rules: {
                // simple rule, converted to {required:true}
                Nombre: "required",
                Direccion: "required",
                // compound rule
                Correo: {
                    required: true,
                    email: true
                },
                Documento: {
                    digits: true,
                    required: true
                },
                Telefono: {
                    digits: true,
                    required: true
                },
                Motivo: {
                    required: true
                },
                CorreoConfirmar: {
                    equalTo: "#Correo"
                }
            },
            messages: {
                Nombre: "Este Campo es Obligatorio",
                Direccion: "Este Campo es Obligatorio",
                Motivo: "Este Campo es Obligatorio",
                Documento: {
                    required: "Este Campo es Obligatorio",
                    digits: "Ingrese sólo números"
                },
                Telefono: {
                    required: "Este Campo es Obligatorio",
                    digits: "Ingrese sólo números"
                },
                Correo: {
                    required: "Este Campo es Obligatorio",
                    email: "Por favor, ingrese un correo válido",                
                },
                CorreoConfirmar: {
                    equalTo: "Los correos deben coincidir"
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }
        });
    </script>
@endsection