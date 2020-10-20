@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaObrasOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaObrasOs.edit', $faturaObrasOs) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaObrasOs, ['route' => ['faturaObrasOs.update', $faturaObrasOs->id], 'method' => 'patch']) !!}

                        @include('fatura_obras_os.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
