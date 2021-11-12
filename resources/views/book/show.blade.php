@extends('book.layouts.base')

@section('title','show')

@section('content')

    <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
    
    <table class="table table-light table-stripe">
        <tr>
            <th>title</th>
        </tr>
        <tr>
            <td scope="row">{{ $book->title }}</td>
        </tr>
    </table>

    <table class="table table-light table-stripe">
        <tr>
            <th>author</th>
        </tr>
        <tr>
            <td scope="row">{{ $book->author }}</td>
        </tr>
    </table>
    
    <table class="table table-light table-stripe">
    <tr>
        <th>story</th>
    </tr>
    <tr>
        <td scope="row">{{ $book->Synopsis }}</td>
    </tr>
    </table>

@endsection