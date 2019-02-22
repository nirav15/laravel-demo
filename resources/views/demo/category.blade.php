@extends('layouts.default')

@section('title', 'category')

@section('content')
    <h1> {{ $title }}</h1>
    {!! Form::open(['action' => 'CategoryController@category', 'method' => 'post']) !!}
        {!! Form::token() !!}
        {!! Form::label('search', 'Search:') !!}
        {!! Form::text('search') !!}
        {!! Form::submit('Search', null, ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Updated_ at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@stop