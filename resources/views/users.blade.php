<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="row justify-content-center">
    <table class="m-5 text-center table " style="width:60%">
<thead>
    <th>name</th>
    <th>email</th>
    <th>created at</th>
    <th>Actions</th>
</thead>
<tbody>
    @foreach($creators as $creator)
    <tr>
        <td>{{$creator->name}}</td>
        <td>{{$creator->email}}</td>
        <td>{{$creator->created_at}}</td>
       
    <td> <a href="{{route('user.showinfo',$creator->id)}}"><button type="button" class="btn btn-primary">View</button></a>
       
    
</td>
    </tr>
    @endforeach
</tbody>

    </table>
    </div>
</body>
</html>