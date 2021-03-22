<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Düzenle</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>


<div class="container">

    <h1>Kategori Düzenle</h1>
</div>
<br><br>
<div class="container">
    {!!  Form::model($category,['route' => ['categories.update',$category->id],"method"=>'PUT']) !!}

    {{ csrf_field() }}
    {!! Form::label('Kategori Adı :') !!}
    {!! Form::text('Head',$category->Category_name) !!}<br><br>

    {!! Form::submit("KAYDET") !!}

    {!! Form::close() !!}


</div>

<script type="text/javascript">

</script>
