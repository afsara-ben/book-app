in books.index
@extends('layouts.app')

@section('content')
    <a class="btn btn-info" href="{{ route('books.create') }}">Create New Book</a>
    <table class="center" id="books">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->ISBN }}</td>
                <td><a href="{{ route('books.edit', $book->id) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    {{ $books->links() }}
@endsection
