@extends('layouts.app')

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
                    {!! Form::open(['route' => 'reclamos.store']) !!}

                        @include('reclamos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
