@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaEventosOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaEventosOs.edit', $faturaEventosOs) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaEventosOs, ['route' => ['faturaEventosOs.update', $faturaEventosOs->id], 'method' => 'patch']) !!}

                        @include('fatura_eventos_os.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
