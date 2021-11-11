<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新規作成</h1>
    <p><a href="{{ route('book.index')}}">一覧画面</a></p>
    
    <form action="{{ route('book.store')}}" method="POST">
        @csrf
        <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
        <p>著者：<input type="text" name="author" value="{{old('author')}}"></p>
        <input type="submit" value="登録する">
    </form>
</body>
</html>