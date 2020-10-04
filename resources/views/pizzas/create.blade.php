<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Create Pizza</title>
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
    input {
        font-family: 'Montserrat', sans-serif;
    }
    form div {
        margin: 10px;
    }
</style>
<body>
    <div class="pizza-blog">
        <h1>CREATE PIZZA</h1>
        <form action="/pizzas" method="post">
            @csrf
            Type: <input type="text" name="type">
            Base: <input type="text" name="base">
            Name: <input type="text" name="name">
            <input type="submit" name="create-btn" value="Create">
        </form>
    </div>
</body>
</html>