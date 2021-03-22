<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Düzenle</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>


<div class="container">

    <h1>Blog Düzenle</h1>
</div>
<br><br>
<div class="container">
{!!  Form::model($blog,['route' => ['blog.update',$blog->id],"method"=>'PUT']) !!}

    {{ csrf_field() }}
    {!! Form::label('Blog Başlığı :') !!}
    {!! Form::text('Head',$blog->Head) !!}<br><br>
    {!! Form::label('Blog İçeriği :') !!}
    <textarea class="ckeditor form-control" name="Body" >{{$blog->Body}}</textarea><br><br>
    {!! Form::label('Blog Kategorisi :') !!}

    <select class="itemName form-control" style="width:150px;" name="Category_ID" value="{{$blog->Category_ID}}"></select><br><br>

    {!! Form::label('Blog Resmi :') !!}
    {!! Form::file('resim') !!}<br><br>

    {!! Form::submit("EKLE") !!}

    {!! Form::close() !!}


</div>


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

    $('.itemName').select2({
        placeholder: 'En az iki karakter yazın...',
        ajax: {
            url: '/select2-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.Category_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });


</script>
