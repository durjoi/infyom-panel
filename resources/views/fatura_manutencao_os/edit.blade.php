@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaManutencaoOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaManutencaoOs.edit', $faturaManutencaoOs) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaManutencaoOs, ['route' => ['faturaManutencaoOs.update', $faturaManutencaoOs->id], 'method' => 'patch']) !!}

                        @include('fatura_manutencao_os.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
