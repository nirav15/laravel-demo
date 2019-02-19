@extends('layouts.default')

@section('title', 'Contact')

@section('content')
    <form action="{{ route('contactValidation') }}" method="POST" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="number">Number:</label>
            <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" value="{{old('number')}}">
            @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop