@extends("master")
@section("title") Create New Post @endsection
@section("content")
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="mb-0">Create New Post</h1>
                            </div>
                            <a href="" class="btn btn-lg btn-outline-primary">Home</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("post.store")}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary">Add post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
