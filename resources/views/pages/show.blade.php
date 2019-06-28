@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            Book details
        </div>
        <form>
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <p class="card-text">Book content</p>
                <a href="{{ route('delete_book', ['id' => $book->id])}}" class="btn btn-primary">Delete</a>
                <a href="{{ route('edit_book', ['id' => $book->id])}}" class="btn btn-dark">Edit</a>
            </div>
        </form>
    </div>
@stop
