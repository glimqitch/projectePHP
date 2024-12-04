<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonic - Llista de Jocs</title>

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
        <h1>Llista de Jocs de Sonic</h1>
        <a href="/sonic/create" class="button">Afegir joc</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Any</th>
                <th>Plataforma</th>
                <th>Gènere</th>
                <th>Desenvolupador</th>
                <th>Accions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sonics as $sonic): ?>
            <tr>
                <td><?= $sonic->id ?></td>
                <td><?= $sonic->name ?></td>
                <td><?= $sonic->releaseYear ?></td>
                <td><?= $sonic->platform ?></td>
                <td><?= $sonic->genre ?></td>
                <td><?= $sonic->developer ?></td>
                <td>
                    <a href="/sonic/edit/<?= $sonic->id ?>" class="button">Editar</a>
                    <a href="/sonic/confirm-delete/<?= $sonic->id ?>" class="button">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

</body>
</html>
