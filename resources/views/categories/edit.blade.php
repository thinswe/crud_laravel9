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
        <h1>Edit Category</h1>
        <div class="row">
            <div class="col-sm-4">
                <form action="/category-update/{{$category->id}}" method="post">
                    @csrf
                    @method('put')
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{$category->title}}">
                    <button class="btn btn-info mt-4" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
    
</html>