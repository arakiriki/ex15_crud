<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="alert alert-dark">
        <div>
            <h1>books</h1>  
            <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.create') }}'">新規追加</button>
        </div>

        @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
        @endif
        

       <table class="table table-light table-striped">
            <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">more</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($books as $book)
                <th scope="row">{{ $book->title }}</th>
                <th scope="row">{{ $book->author }}</th>
                <td><a href="{{ route('book.show',$book->id)}}">more</a></td>
                <td><a href="{{ route('book.edit',$book->id)}}">edit</a></td>
                <td>
                    <form action="{{ route('book.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="" value="delete">
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
      </table>
    </div>
</body>
</html>