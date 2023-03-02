<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="row justify-between">
        <form class="col-6" action="{{ route('post.edit',$post->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div>
                <label class="form-label" for="title">title</label>
                <input class="form-control" type="text" name="title" value="{{$post->title}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>

                <label class="form-label" for="description">description</label>

                <input class="form-control" type="text" name="description" value="{{$post->description}}">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="form-label" for="description">post creator</label>
                <input class="form-control" type="text" name="creator_id"  value="{{$post->creator_id}}">
                @error('creator_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</body>
</html>