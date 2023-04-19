<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include("cdn")
      
    </head>
    <body>
        @auth
        <div class="p-5 m-5">
            <h1>Congrats You are logged in</h1>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-dark mt-3">Log out</button>
            </form>
            <div class="my-5 p-5 rounded border">
                <h2>Create Post</h2>
                <form action="/create-post" method="POST">

                    @csrf
                    <div class="my-4">
                        <label for="" class="form-label">Title</label>
                    <input name="title" type="text" class=" form-control">
                    </div>
                    <div class="my-4">
                        <label for="" class="form-label">Body</label>
                    <textarea name="body" type="text" class=" form-control"></textarea>
                    </div>
                    <button class="btn btn-outline-success">Create</button>
                </form>
            </div>
            <div class="my-5">
                <h2>Your Posts</h2>
                @foreach ($posts as $post )
                    <div class=" bg-dark text-white border p-3 rounded my-5">
                        <p>{{$post['title']}}</p>
                        <p>{{$post['body']}}</p>
                        <a href="/edit-post/{{$post->id}}" class=" btn btn-outline-secondary mb-2 text-white">Edit</a>
                        <form action="/delete-post/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class=" btn btn-danger">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
            @else
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="p-5 m-5 border rounded">
              
                <h2>Register</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div class="my-4">
                        <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class=" form-control">
                    </div>
                    <div class="my-4">
                        <label for="" class="form-label">Email</label>
                    <input name="email" type="email" class=" form-control">
                    </div>
                    <div class="my-4">
                        <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class=" form-control">
                    </div>
                    <button class=" btn btn-outline-dark">Register</button>
                </form>
            </div>
                </div>
                <div class="col-5">
                    <div class="p-5 m-5 border rounded">
              
                <h2>Login</h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="my-4">
                        <label for="" class="form-label">Name</label>
                    <input name="loginname" type="text" class=" form-control">
                    </div>
                    
                    <div class="my-4">
                        <label for="" class="form-label">Password</label>
                    <input name="loginpassword" type="password" class=" form-control">
                    </div>
                    <button class=" btn btn-outline-primary">Login</button>
                </form>
            </div>
                </div>
            </div>
        @endauth
    </body>
</html>
