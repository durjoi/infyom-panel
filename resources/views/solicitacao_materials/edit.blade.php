@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/solicitacaoMaterials.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoMaterials.edit', $solicitacaoMaterial) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($solicitacaoMaterial, ['route' => ['solicitacaoMaterials.update', $solicitacaoMaterial->id], 'method' => 'patch']) !!}

                        @include('solicitacao_materials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
