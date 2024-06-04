<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
     <script src="https://cdn.tailwindcss.com"></script>

   {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
</head>
<body>


        <h1 class="text-2xl">Welcome to the Post Page</h1>

        <a href="{{route('posts.create')}}">Nuevo Post</a>

        <ul>

            @foreach ($posts as $post)
                <li>
                    <a href="{{route('posts.show',$post->id)}}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach

        </ul>


        {{$posts->links()}}
</body>
</html>
