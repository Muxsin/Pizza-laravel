<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Pizzas</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        text-decoration: center;
    }
    .pizza-blog {
        margin-top: 15%;
    }
</style>
<body>
    <div class="pizza-blog">
        <h1>PIZZAS</h1>
        @foreach ($pizzas as $pizza)
            <p> {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->name }}</p>
        @endforeach
    </div>
</body>
</html>