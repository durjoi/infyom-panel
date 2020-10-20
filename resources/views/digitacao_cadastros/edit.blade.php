@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/digitacaoCadastros.singular')
        </h1>
        {{ Breadcrumbs::render('digitacaoCadastros.edit', $digitacaoCadastros) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($digitacaoCadastros, ['route' => ['digitacaoCadastros.update', $digitacaoCadastros->id], 'method' => 'patch']) !!}

                        @include('digitacao_cadastros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
