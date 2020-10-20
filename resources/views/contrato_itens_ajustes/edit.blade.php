@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/contratoItensAjustes.singular')
        </h1>
        {{ Breadcrumbs::render('contratoItensAjustes.edit', $contratoItensAjuste) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratoItensAjuste, ['route' => ['contratoItensAjustes.update', $contratoItensAjuste->id], 'method' => 'patch']) !!}

                        @include('contrato_itens_ajustes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
