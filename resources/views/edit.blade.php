@extends("master")
@section("title") {{$post->title}} @endsection
@section("content")
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="mb-0">Edit Post</h1>
                            </div>
                            <a href="{{route("index")}}" class="btn btn-lg btn-outline-primary">Home</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("post.update", $post->id)}}" method="post">
                            @csrf
                            @method("put")
                            <div class="mb-4">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" value="{{$post->title}}" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$post->description}}</textarea>
                            </div>
                            <button class="btn btn-primary">Edit post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
