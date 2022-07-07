@extends("master")
@section("content")
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Hello</h1>
                                <p class="text-black-50">What is on your mind?</p>
                            </div>
                            <a href="{{route("post.create")}}" class="btn btn-lg btn-outline-primary">Create Post</a>
                        </div>
                    </div>
                </div>
                @if(session("status"))
                    <div class="alert alert-success" role="alert">
                       {{session("status")}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        @foreach($posts as $post)
                            <div>
                                <h3>{{$post->title}}</h3>
                                <p>{{ Str::words($post->description, 30) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">{{$post->created_at->format("F j, Y, g:i A")}}</p>
                                    <div class="d-flex">
                                        <form action="{{route("post.destory", $post->id)}}" method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </form>
                                        <a href="{{route("post.edit", $post->id)}}" class="mx-3 btn btn-outline-info">Edit</a>
                                        <a href="{{route("post.show", $post->id)}}" class="btn btn-outline-primary">See more</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
