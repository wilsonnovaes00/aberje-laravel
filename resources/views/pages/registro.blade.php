@extends('indexpc')

@section('title')
    Criar Registro
@endsection

@section('content')

    <h1 style="margin-top: 0;">Novo Registro</h1>

    {!! Form::open(['route'=>'ok.app']) !!}
    {!! Form::label('title','Nome do computador') !!}
    {!! Form::text('namepc', null, ['class'=>'form-control', 'required' => 'required']) !!}
    <br>

    {!! Form::label('title','Sistema Operaçional') !!}
    {!! Form::text('systemname', null, ['class'=>'form-control', 'required' => 'required']) !!}
    <br>

    {!! Form::label('title','Número de Série') !!}
    {!! Form::text('numberserie', null, ['class'=>'form-control', 'required' => 'required']) !!}
    <br>



    <input type="submit" value="Criar" class="btn btn-primary btn-md" />

    {!! Form::close() !!}


@endsection

