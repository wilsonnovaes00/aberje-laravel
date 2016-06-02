@extends('indexpc')

@section('title')
    Criar Registro
@endsection

@section('content')

    <div id="edit-pai" style="position: relative; top: 9px; height:629px;">

        <div id="forulario-edit"></div>

        <center><h3><i class="fa fa-edit"></i> Novo Registro </h3></center>

        <hr/>

        {!! Form::open(['route'=>['ramais-ok.app']]) !!}


        {!! Form::label('title','Nome do operador', ['class'=>'text-edit']) !!}  {!! Form::label(null,null, ['class'=>'fa fa-user']) !!}
        {!! Form::text('nome', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Ramal', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-phone-square']) !!}
        {!! Form::text('ramal', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Host', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-inbox']) !!}
        {!! Form::text('host', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','telefone', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-phone']) !!}
        {!! Form::text('telefone', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','E-mail', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-envelope']) !!}
        {!! Form::text('email', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>

        {!! Form::label('title','Aniversário', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-calendar']) !!}
        {!! Form::text('aniversario', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
        <br>







        <input type="submit" value="Criar Registro" class="btn btn-primary btn-sm bt-edit" >


    </div>

@endsection

