@extends('indexpc')

@section('title')
    Criar Registro
@endsection

@section('content')

    <div id="edit-pai">

        <div id="forulario-edit"></div>

        <center><h3><i class="fa fa-edit"></i> Novo Registro </h3></center>
        <hr/>

        <form method="post" action="/update/ramal/{{$pc->id}}">


        {!! Form::open(['route'=>['update.ramal.app']]) !!}

        {!! Form::label('title','Nome do computador', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-desktop']) !!}
        {!! Form::text('nome', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Sistema Operaçional', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-bullseye']) !!}
        {!! Form::text('ramal', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
        {!! Form::text('host', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
        {!! Form::text('telefone', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
        {!! Form::text('email', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
        {!! Form::text('aniversario', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>







        <input type="submit" value="Criar Registro" class="btn btn-primary btn-sm bt-edit" >


    </div>

@endsection

