<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Pizza {{ $pizza->name}}</title>
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
        <h1>PIZZA "{{ $pizza->name }}"</h1>
        <p> <b>Type</b> - {{ $pizza->type }}</p>
        <p> <b>Base</b> - {{ $pizza->base }} </p>
        <a href="/pizzas"><- All pizzas list</a>
    </div>
    
</body>
</html>