add
@extends('layout.layout');
@section('content')

    <div class="container" style="margin-top:70px;">
        <h3 style="text-align: center;">Edit Artical</h3>
    <form action="{{url('/articals/update')."/".$Artical->id}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" value="{{$Artical->title}}" id="exampleInputEmail1" aria-describedby="Title"
                    >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="Title" value="{{$Artical->author}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea cols="10" rows="7" class="form-control" name="description" >{{$Artical->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
