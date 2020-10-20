@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ordemDeServicoManutencaos.singular')
        </h1>
        {{ Breadcrumbs::render('ordemDeServicoManutencaos.edit', $ordemDeServicoManutencao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordemDeServicoManutencao, ['route' => ['ordemDeServicoManutencaos.update', $ordemDeServicoManutencao->id], 'method' => 'patch']) !!}

                        @include('ordem_de_servico_manutencaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
