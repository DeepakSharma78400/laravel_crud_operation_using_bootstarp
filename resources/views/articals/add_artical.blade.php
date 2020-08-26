add
@extends('layout.layout');
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container" style="margin-top:70px;">
        <h3 style="text-align: center;">New Artical</h3>
        <form action="{{url('/articals/store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="Title"
                    placeholder="Enter Blog Titlel">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="Title"
                    placeholder="Author">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea cols="10" name="description" rows="7" class="form-control">Description</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
