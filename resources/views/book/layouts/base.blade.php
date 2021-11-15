<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body class="bg-dark">
    
    <div class="alert alert-dark" style="margin: 5% 1%">


        <header>
            @include('book.includes.header')
        </header>


        <main>
            @yield('content')
        </main>

        <footer>
            @include('book.includes.footer')
        </footer>
        

    </div>
</body>
</html>