@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Call
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($crmcalls, ['route' => ['crmcalls.update', $crmcalls->id], 'method' => 'patch', 'class' => 'col-xs-12 form-control']) !!}

                        @include('crmcalls.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection