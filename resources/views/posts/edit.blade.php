<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
</head>

<body>
    <h1>Formulario para editar Posts</h1>

    <form action="{{route('posts.update',$post->id)}}" method="POST">

        @csrf

        @method('PUT');

        <label>
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br><br>
        <label >
            Categoría:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content" >{{$post->content}}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>
