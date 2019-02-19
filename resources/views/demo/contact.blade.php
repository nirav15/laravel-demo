@extends('layouts.default')

@section('title', 'Contact')

@section('content')

    {!! Form::open(['action' => 'ContactController@saveContact', 'method' => 'post']) !!}
        {!! Form::token() !!}
        <div class="form-group">
            {!! Form::label('name', 'Full name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter name']) !!}
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail address:') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter email']) !!}
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('number', 'Number:') !!}
            {!! Form::text('number', null, ['class' => 'form-control', 'id' => 'number', 'placeholder' => 'Enter number']) !!}      
            @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
            @endif
        </div>
        <div class="form-group"> 
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Write description']) !!}
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>           
        {!! Form::submit('Save', null, ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@stop