<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Llibre</title>

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
        <h1>Editar Llibre</h1>
        <form action="/books/update/<?= $book->id ?>" method="POST">
            <div>
                <label for="name">Títol</label>
                <input type="text" id="name" name="name" value="<?= $book->name ?>" required>
            </div>
            <div>
                <label for="author">Autor</label>
                <input type="text" id="author" name="author" value="<?= $book->author ?>" required>
            </div>
            <div>
                <label for="releaseYear">Any de Lançament</label>
                <input type="number" id="releaseYear" name="releaseYear" value="<?= $book->releaseYear ?>" required>
            </div>
            <button type="submit" class="button">Desa Canvis</button>
        </form>
    </section>
</main>

</body>
</html>
