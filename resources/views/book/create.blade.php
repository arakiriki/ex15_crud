@extends('book.layouts.base')

@section('title','create')

@section('content')


    
    <form action="{{ route('book.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
        <p>著者：<input type="text" name="author" value="{{old('author')}}"></p>
        <p>あらすじ：</p><textarea name="Synopsis" value="{{old('author')}}" rows="10" cols="60"></textarea></p><br>
        <input  type="file" name="image">
        <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.index') }}'">一覧画面</button>
        <input class="btn btn-dark" type="submit" value="登録する">
    </form>

@endsection
