@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obrasBaixaIpAnteriors.singular')
        </h1>
        {{ Breadcrumbs::render('obrasBaixaIpAnteriors.edit', $obrasBaixaIpAnterior) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrasBaixaIpAnterior, ['route' => ['obrasBaixaIpAnteriors.update', $obrasBaixaIpAnterior->id], 'method' => 'patch']) !!}

                        @include('obras_baixa_ip_anteriors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
