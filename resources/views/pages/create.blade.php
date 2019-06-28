@extends('layouts.default')
@section('content')
    <form action="{{route('create_book')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
            <small id="titleHelp" class="form-text text-muted">Type some title.</small>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" id="author" aria-describedby="authorHelp" placeholder="Enter author name">
            <small id="authorHelp" class="form-text text-muted">Type some author name.</small>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" id="isbn" aria-describedby="isbnHelp" placeholder="Enter ISBN">
            <small id="isbnHelp" class="form-text text-muted">Type some ISBN code.</small>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@stop
