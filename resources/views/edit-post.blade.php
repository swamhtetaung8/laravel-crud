<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include("cdn")
      
    </head>
    <body>
        <div class=" p-5 m-5 border rounded">
            <h1 class="mb-5">Edit Post</h1>
  <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}" class="form-control">
    <textarea name="body" class="form-control my-5">{{$post->body}}</textarea>
    <button class=" btn btn-primary">Save Changes</button>
  </form>
        </div>
    </body>
</html>