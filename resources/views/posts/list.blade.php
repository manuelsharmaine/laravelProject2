@extends('layouts.app')

@section('content')
    <h1>Posts </h1>

    <a href="/posts/create" class="btn btn-success btn-sm">Create Post</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Created By</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                <th scope="row"> {{ $post->id }} </th>
                <td>{{ $post->name }} </td>
                <td>{{ $post->description }} </td>
                <td>{{ $post->category?->name }} </td>
                <td>{{ $post->user?->name }} </td>

                <td>
                    <a href="/posts/{{$post->id}}" class="btn btn-info btn-sm">View</a>
                    <form action="/posts/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm ">Delete </button>
                    </form>
                </td>
                </tr>
            @endforeach
        
        </tbody>
      </table>
     
      <div class="mt-4 p-4 box has-text-centered">
          {{ $posts->links('pagination::bootstrap-4') }}
      </div>

@endsection