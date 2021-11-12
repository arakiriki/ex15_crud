@extends('book.layouts.base')

@section('title','Book Show')

@section('content')

    <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
    
    <table class="table table-light table-stripe">
        <tr>
            <th>title</th>
            <th>author</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        <tr>
            <td scope="row">{{ $book->title }}</td>
            <td scope="row">{{ $book->author }}</td>
            <td scope="row">{{ $book->created_at }}</td>
            <td scope="row">{{ $book->updated_at }}</td>
        </tr>
    </table>

@endsection