@extends('layout.layout');
@section('content')
    <div class="container" style="margin-top:100px;">
        <a href="{{ url('/articals/add') }}">
            <button style="float:right; margin-bottom: 20px;" type="button" class="btn btn-primary">Add New</button>
        </a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">Description</th>
                    <th scope="col">author</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Articals as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->description }}</td>
                        <td>{{ $cat->author }}</td>
                        <td><a href="{{ url('/articals/edit/' . $cat->id) }}"><button type="button"
                                    class="btn btn-primary">Edit</button></a></td>
                        <td><a href="{{ url('/articals/delete/' . $cat->id) }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
