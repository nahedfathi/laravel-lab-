<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- <p>{{$user->post[0]->title}}</p> --}}
    
    <h1>user info</h1>
    <p>name:-{{$user->name}} </p>
    <p>email :- {{$user->email}} </p>
    <h1>posts</h1>
    @foreach($user->post as $post)
    <p>title:- {{$post->title}} </p>
    <p>creator name:- {{$post->creator->name}} </p>
    <p>description :- {{$post->description}} </p>
    <p>creator :- {{$post->created_at}} </p>
    <p>********************************</p>
    @endforeach
  
</body>
</html>