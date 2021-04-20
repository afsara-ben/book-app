in books.create
@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title"
                aria-describedby="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" value="{{ old('author') }}" class="form-control" id="author"
                aria-describedby="author" placeholder="Enter author name">
        </div>
        <div class="form-group">
            <label for="ISBN">ISBN</label>
            <input type="number" name="ISBN" value="{{ old('ISBN') }}" class="form-control" id="ISBN"
                aria-describedby="ISBN" placeholder="Enter ISBN number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
