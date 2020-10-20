@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obrasBaixaIps.singular')
        </h1>
        {{ Breadcrumbs::render('obrasBaixaIps.edit', $obrasBaixaIp) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrasBaixaIp, ['route' => ['obrasBaixaIps.update', $obrasBaixaIp->id], 'method' => 'patch']) !!}

                        @include('obras_baixa_ips.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
