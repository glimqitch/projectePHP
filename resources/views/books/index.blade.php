<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llibres - Llista de Llibres</title>

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
        <h1>Llista de Llibres</h1>
        <a href="/books/create" class="button">Afegir llibre</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Títol</th>
                <th>Autor</th>
                <th>Any</th>
                <th>Accions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book->id ?></td>
                <td><?= $book->name ?></td>
                <td><?= $book->author ?></td>
                <td><?= $book->releaseYear ?></td>
                <td>
                    <a href="/books/edit/<?= $book->id ?>" class="button">Editar</a>
                    <a href="/books/confirm-delete/<?= $book->id ?>" class="button">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

</body>
</html>
