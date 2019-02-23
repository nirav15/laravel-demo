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
            <th>Action</th>
        </tr>
    </thead>
</table>
@stop

@push('scripts')
<script>
    $(document).ready(function() {
        $('#category').DataTable({
            "serverSide": true,
            'ajax': {
                "url": "{{ route('datatable') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: "{{csrf_token()}}"
                }
            },
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
                    'data': 'status',
                    render: function(data, type, full, meta) {
                        var status = "Active";
                        if (data == 0) {
                            status = "Deactive";
                        }
                        return status;
                    }
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': 'updated_at'
                },
                {
                    'data': 'id',
                    'searchable': false,
                    'orderable': false,
                    'render': function(data, type, full, meta) {
                        var id = data;
                        return `<input type="button" class="edit" value="edit" id=${id}>
                                <input type="button" class="delete" value="delete" id="${id}">`;
                    }
                },
            ],
        });
        $(document).on('click', '.delete', function() {
            var id = $(this).attr('id');
            $.ajax({
                "type": "GET",
                "url": "{{ route('delete') }}",
                "data": {
                    "id": id,
                },
                "success": function(data) {
                    console.log(data);
                }
            });
        });
        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $.ajax({
                "type": "GET",
                "url": "{{ route('edit') }}",
                "data": {
                    "id": id,
                },
                "success": function(data) {
                    console.log(data);
                }
            });
        });
    });
</script>
@endpush 