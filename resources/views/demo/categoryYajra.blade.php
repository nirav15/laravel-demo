@extends('layouts.default')

@section('title', 'category')

@section('content')

<table class="table table-hover" id="category">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
    </thead>
</table>
@stop 

@push('scripts')
<script>
    $(document).ready(function() {
        $('#category').DataTable({
            "serverSide": true,
            'ajax': "{{ route('getdata') }}",
            'columns': [{
                    'data': 'id'
                },
                {
                    'data': 'name'
                },
                {
                    'data': 'description'
                },
                {
                    'data': 'status'
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': 'updated_at'
                }
            ]
        });
    });
</script>
@endpush