@extends('book.layouts.base')

@section('title','edit')

@section('content')



    
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
    
    <form action="{{ route('book.update',$book->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p>タイトル：<input type="text" name="title" value="{{ $book->title }}"></p>
            <p>著者：<input type="text" name="author" value="{{ $book->author }}"></p>
            <p>あらすじ：</p><textarea name="Synopsis"  rows="10" cols="60">{{ $book->Synopsis }}</textarea></p><br>
            <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
            <input class="btn btn-dark" type="submit" value="編集する">
        </div>
        
    </form>

@endsection