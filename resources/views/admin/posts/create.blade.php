@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="posts_title">Title:</label>
          <input type="text" class="form-control" id="posts_title" name="posts_title">
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <div>
          <select name="category_id" class="form-select form-select-lg mb-3"  aria-label="Default select example">
            <option selected>Select a category:</option>
            @foreach ($data_categories as $value)
              <option value="{{$value->id}}">
                  {{$value->name}}
              </option>
            @endforeach
          </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Add">
      </form>
</div>
@endsection


