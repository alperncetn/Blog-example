
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>







<h1 class="container">Kategori Oluştur</h1>

<div class="container">

    {!!  Form::open(['url' => '/categories',"method"=>'POST','files'=>true]) !!}
    {{ csrf_field() }}
    {!! Form::label('Kategori Adı :') !!}
    {!! Form::text('Category_name','...') !!}<br><br>

    {!! Form::submit("EKLE") !!}

    {!! Form::close() !!}


</div>

<script type="text/javascript">



</script>

