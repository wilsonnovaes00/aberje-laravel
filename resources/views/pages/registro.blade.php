@extends('indexpc')

@section('title')
    Criar Registro
@endsection

@section('content')

    <div id="edit-pai">

        <div id="forulario-edit"></div>

        <center><h3><i class="fa fa-edit"></i> Novo Registro </h3></center>
        <hr/>

         {!! Form::open(['route'=>['ok.app']]) !!}

            {!! Form::label('title','Nome do computador', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-desktop']) !!}
            {!! Form::text('namepc', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            {!! Form::label('title','Software', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-bullseye']) !!}
            {!! Form::text('systemname', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
            {!! Form::text('numberserie', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            <input type="submit" value="Criar Registro" class="btn btn-primary btn-sm bt-edit" >


    </div>

@endsection

