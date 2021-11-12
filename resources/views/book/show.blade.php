@extends('book.layouts.base')

@section('title','Book Show')

@section('content')

    <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
    
    <table class="table table-light table-stripe">
        <tr>
            <th>title</th>
            <th>author</th>
        </tr>
        <tr>
            <td scope="row">{{ $book->title }}</td>
            <td scope="row">{{ $book->author }}</td>
        </tr>

 

    </table>

    <div class="bg-light">
        <h3>あらすじ</h3>
        <p>{{ $book->Synopsis }}</p>
    </div>

@endsection