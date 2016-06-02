@extends('indexpc')

@section('title')
    Editar Registro
@endsection

@section('content')

    <div id="edit-pai">

        <div id="forulario-edit"></div>

        <center><h3><i class="fa fa-edit"></i> Editando o Registro de número {{$pc->id}}</h3></center>
        <hr/>

        <form method="post" action="/update/{{$pc->id}}">
            {!! Form::model($pc, ['route'=>['ramais-update.app', $pc->id]]) !!}

            {!! Form::label('title','Nome do computador', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-desktop']) !!}
            {!! Form::text('namepc', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            {!! Form::label('title','Sistema Operaçional', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-bullseye']) !!}
            {!! Form::text('systemname', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            {!! Form::label('title','Número de Série', ['class'=>'text-edit']) !!} {!! Form::label(null,null, ['class'=>'fa fa-key']) !!}
            {!! Form::text('numberserie', null, ['class'=>'form-control formulario-edit', 'required' => 'required']) !!}
            <br>

            <input type="submit" value="Atualizar" class="btn btn-primary btn-sm bt-edit" >


        </div>





    </div>




    {!! Form::close() !!}





@endsection