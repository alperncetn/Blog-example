<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Blog</h1>
</div>
<br>
<div class="container">
<a class="btn btn-success " href="{{route('blog.create')}}">Yeni Blog Ekle</a>
<a class="btn btn-danger " href="{{route('categories.index')}}">Kategoriler</a>
</div>
<br>
<div class="container">
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>Resim</th>
            <th>Başlık</th>
            <th>İçerik</th>
            <th width="100px">Goster</th>
            <th width="100px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

<script type="text/javascript">


    var table;
    $(function() {

        table=$('.data-table').DataTable({
            ajax: '{{ route('users') }}',
            serverSide: true,
            processing: true,
            columns: [
                {data: 'image', name: 'image'},
                {data: 'Head', name: 'Head'},
                {data: 'Body', name: 'Body'},
                {data: 'show', name: 'show'},
                {data: 'action', name: 'action'},
            ]
        });
    })




    function edit(id){
        var url = '{{ route("blog.edit", ":id") }}';
        url = url.replace(':id',id);
        window.location.href =  url;
    }
    function del(id){

        var url = '{{ route("BlogDelete", ":id") }}';
        url = url.replace(':id',id);
        window.location.href =  url;

    }
    function goster(id){

        var url = '{{ route("BlogShow", ":id") }}';
        url = url.replace(':id',id);
        window.location.href =  url;

    }




</script>
</html>
