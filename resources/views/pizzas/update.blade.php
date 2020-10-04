<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Update Pizza</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        text-decoration: center;
    }
    input {
        font-family: 'Montserrat', sans-serif;
    }
    .pizza-blog {
        margin-top: 15%;
    }
    form div {
        margin: 10px;
    }
</style>
<body>
    <div class="pizza-blog">
        <h1>UPDATE PIZZA</h1>
        <form action="/pizza/{{$pizza->id}}" method="post">
            @csrf
            Type: <input type="text" name="type" value="{{ $pizza->type }}">
            Base: <input type="text" name="base" value="{{ $pizza->base }}">
            Name: <input type="text" name="name" value="{{ $pizza->name }}">
            <input type="submit" name="update-btn" value="Update">
        </form>
    </div>
</body>
</html>