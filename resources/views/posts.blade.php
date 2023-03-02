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
    <div class="container text-center">
      <a href="{{route('post.create')}}"> <button  type="button" class="btn btn-success mt-5">Create post  </button></a>
    </div>
    <div class="container text-center">
        <a href="{{route('user.show')}}"> <button  type="button" class="btn btn-success mt-5">View Creators  </button></a>
      </div>
<br><br>
<div class="row justify-content-center">
    <table class="m-5 text-center table " style="width:60%">
<thead>
    <th>title</th>
    <th>posted by</th>
    <th>created at</th>
    <th>Actions</th>
</thead>
<tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->creator->name}}</td>
        <td>{{$post->created_at}}</td>
        <!-- <td>     </td> -->
    <td> <a href="{{route('show_post',$post->id)}}"><button type="button" class="btn btn-primary">View</button></a>
       
        <form action="{{route('post.update',$post->id)}}" style="display:inline-block">
           
          <button type="submit" class="btn btn-info">Edit</button>
        </form>


    <form action="{{route('post.destroy',$post->id)}}" method="POST" style="display:inline-block">
        @method('DELETE')
        @csrf()
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
</td>
    </tr>
    @endforeach
</tbody>

    </table>
    {{ $posts->links() }}
    </div>
    <a href="/auth/redirect">sign-in with git hub</a>
</body>
</html>