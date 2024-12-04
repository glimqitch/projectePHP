<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Llibre</title>

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="/home">Inici</a></li>
            <li><a href="/sonic">Sonic</a></li>
            <li><a href="/books">Llibres</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h1>Crear Llibre</h1>
        <form action="/books/store" method="POST">
            <div>
                <label for="name">Títol</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="author">Autor</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div>
                <label for="releaseYear">Any de Lançament</label>
                <input type="number" id="releaseYear" name="releaseYear" required>
            </div>
            <button type="submit" class="button">Crear</button>
        </form>
    </section>
</main>

</body>
</html>
