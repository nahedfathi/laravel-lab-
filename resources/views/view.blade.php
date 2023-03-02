<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $posts)
    <h1>post info</h1>
    <p>Title:-{{$posts->title}} </p>
    <p>Description :- {{$posts->description}} </p>

    <h1>post creator info</h1>
    <p>Name:- {{$posts->creator->name}} </p>
    <p>Email :- {{$posts->creator->email}} </p>
    <p>Created at :- {{$posts->created_at}} </p>
   @endforeach
</body>
</html>