@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaManutencaos.singular')
        </h1>
        {{ Breadcrumbs::render('faturaManutencaos.edit', $faturaManutencao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaManutencao, ['route' => ['faturaManutencaos.update', $faturaManutencao->id], 'method' => 'patch']) !!}

                        @include('fatura_manutencaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
