@extends('layouts.app')



@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit Post') }}</div>

            <div class="card-body">
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('PATCH')

   
                    <div class="mb-3">
                        <label>Name </label>
                        <input type="text" name="name" class="form-control" value="{{$post->name}}">
                    </div>

                    <div class="mb-3">
                        <label>Category </label>
                        <select class="form-control m-bot15" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>    
                            @endforeach
                        
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label>Description </label>
                        <textarea name="description" class="form-control" cols="30" rows="10">{{$post->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Save </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection