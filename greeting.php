<!DOCTYPE html>
<head>
    <title>Greeting App</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>

<!--Form -->
<main class="container">
    <h1>Greeting App</h1>
    <form method="post" action="assign..php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label>Favorite Food:</label>
        <br>
        <input type="radio" id="pulao" name="favorite_food" value="Pulao" required>
        <label for="pulao">Pulao</label><br>

        <input type="radio" id="paneer" name="favorite_food" value="Paneer">
        <label for="paneer">Paneer</label><br>

        <input type="radio" id="biryani" name="favorite_food" value="Biryani">
        <label for="biryani">Biryani</label><br><br>

        <input type="submit" value="Submit">
    </form>
</main>
</body>
</html>
