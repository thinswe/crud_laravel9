<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container pt-5">
        <h1>Categories<a class="btn btn-info mx-3" href="/category-create">New Category</a></h1>
        @if(session()->has('success'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session()->get('success') }}</strong>
        </div>
        @endif
        <table class="table mt-3">
            <thead>
                <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$category->title}}</td>
                        <td>
                        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
                        <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
    
</html>