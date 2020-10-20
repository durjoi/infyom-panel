@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ordemDeServicos.singular')
        </h1>
        {{ Breadcrumbs::render('ordemDeServicos.edit', $ordemDeServico) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordemDeServico, ['route' => ['ordemDeServicos.update', $ordemDeServico->id], 'method' => 'patch']) !!}
                    @include('ordem_de_servicos.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
