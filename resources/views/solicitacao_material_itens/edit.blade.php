@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/solicitacaoMaterialItens.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoMaterialItens.edit', $solicitacaoMaterialItens) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($solicitacaoMaterialItens, ['route' => ['solicitacaoMaterialItens.update', $solicitacaoMaterialItens->id], 'method' => 'patch']) !!}

                        @include('solicitacao_material_itens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
