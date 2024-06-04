<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
</head>

<body>
    <h1>Formulario para crear nuevos Posts</h1>

    <form action="/posts" method="POST">

        @csrf

        <label>
            Titulo:
            <input type="text" name="title">
        </label>
        <br><br>
        <label >
            Categoría:
            <input type="text" name="category">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
