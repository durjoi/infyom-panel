@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/itensOs.singular')
        </h1>
        {{ Breadcrumbs::render('itensOs.edit', $itensOs) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($itensOs, ['route' => ['itensOs.update', $itensOs->id], 'method' => 'patch']) !!}

                        @include('itens_os.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
