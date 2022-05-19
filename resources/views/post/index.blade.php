<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>List POSTS</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <ul>
        @foreach($posts as $post)

        <li>
            <a href="">{{$post->title}}</a> <br>
            <!-- <img src="{{url($post->thumbnail)}}" alt=""> -->
            <p>{!!$post->content!!}</p>
        </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
</body>

</html>