@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/acompanhamentoObras.singular')
        </h1>
        {{ Breadcrumbs::render('acompanhamentoObras.edit', $acompanhamentoObras) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($acompanhamentoObras, ['route' => ['acompanhamentoObras.update', $acompanhamentoObras->id], 'method' => 'patch']) !!}

                        @include('acompanhamento_obras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
