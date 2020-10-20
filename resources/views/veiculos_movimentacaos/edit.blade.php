@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/veiculosMovimentacaos.singular')
        </h1>
        {{ Breadcrumbs::render('veiculosMovimentacaos.edit', $veiculosMovimentacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($veiculosMovimentacao, ['route' => ['veiculosMovimentacaos.update', $veiculosMovimentacao->id], 'method' => 'patch']) !!}

                        @include('veiculos_movimentacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
