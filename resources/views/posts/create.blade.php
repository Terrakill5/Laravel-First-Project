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
{{--
    @if ($errors->any())
        <div>
            <h2>
                Errores:
            </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif --}}

    <form action="/posts" method="POST">

        @csrf

        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
            <p>
                {{$message}}
            </p>
        @enderror
        <br><br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
        <p>
            {{$message}}
        </p>
    @enderror
        <br><br>
        <label >
            Categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
        <p>
            {{$message}}
        </p>
    @enderror
        <br><br>
        <label>
            Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>
        @error('content')
        <p>
            {{$message}}
        </p>
    @enderror
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
