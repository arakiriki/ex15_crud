@extends('book.layouts.base')

@section('title','index')

@section('content')
    

    <button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.create') }}'">新規追加</button>
            

    
    @if ($message = Session::get('success'))
    <p class="bg-light">{{ $message }}</p>
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
            <td><button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.show',$book->id) }}'">more</button></td>
            <td><button type="button" class="btn btn-dark"  onclick="location.href='{{ route('book.edit',$book->id) }}'">edit</button></td>
            <td>
                <form action="{{ route('book.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" name="" value="delete">
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

@endsection

