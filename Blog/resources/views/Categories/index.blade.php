<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="/vendor/datatables/buttons.server-side.js"></script>
</head>
<body>
<div class="container">
<h1>Kategoriler</h1>
</div>
<br>
<div class="container">
    <a class="btn btn-success " href="{{route('categories.create')}}">Yeni Kategori Ekle</a>
    <a class="btn btn-danger " href="{{route('blog.index')}}">Blog</a>
</div>
<br>
<div class="container">

    {!! $dataTable->table() !!}

{{--    <table class="table table-bordered data-table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>İsim</th>--}}
{{--            <th width="100px">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        </tbody>--}}
{{--    </table>--}}
</div>

</body>

<script type="text/javascript">


{{--    var table;--}}
{{--    $(function() {--}}

{{--        table=$('.data-table').DataTable({--}}
{{--            ajax: '{{ route('usercategories') }}',--}}
{{--            serverSide: true,--}}
{{--            processing: true,--}}
{{--            columns: [--}}
{{--                {data: 'id', name: 'id'},--}}
{{--                {data: 'Category_name', name: 'Category_name'},--}}
{{--                {data: 'action', name: 'action'},--}}
{{--            ]--}}
{{--        });--}}
{{--    })--}}




    function edit(id){
        var url = '{{ route("CategoriesEdit", ":id") }}';
        url = url.replace(':id',id);
        window.location.href =  url;
    }
    function del(id){

        var url = '{{ route("CategoriesDelete", ":id") }}';
        url = url.replace(':id',id);
        window.location.href =  url;

    }



</script>

{!! $dataTable->scripts() !!}
</html>
