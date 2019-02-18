@extends('layouts.default')

@section('title')
    {{ $title }}
@stop

@section('content')
    <form action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="number">Number:</label>
            <input type="text" class="form-control" id="number" placeholder="Enter number" name="number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop