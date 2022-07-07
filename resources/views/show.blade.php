@extends("master")
@section("title") {{$post->title}} @endsection
@section("content")
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="mb-0">Post Detail</h1>
                            </div>
                            <a href="{{route("index")}}" class="btn btn-lg btn-outline-primary">Home</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                            <div>
                                <h3>{{$post->title}}</h3>
                                <p>{{ $post->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">{{$post->created_at->format("F j, Y, g:i A")}}</p>
                                    <div class="d-flex">
                                        <form action="{{route("post.destory", $post->id)}}" class="mx-3" method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </form>
                                        <a href="{{route("post.edit", $post->id)}}" class="btn btn-outline-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
