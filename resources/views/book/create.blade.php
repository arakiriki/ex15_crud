@extends('book.layouts.base')

@section('title','Book Create')

@section('content')


    
    <form action="{{ route('book.store')}}" method="POST">
        @csrf
        <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
        <p>著者：<input type="text" name="author" value="{{old('author')}}"></p>
        <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
        <input class="btn btn-dark" type="submit" value="登録する">
    </form>

@endsection
