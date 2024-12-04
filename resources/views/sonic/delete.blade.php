<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Joc - Sonic</title>

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
        <h1>Estàs segur que vols eliminar el joc: <?= $sonic->name ?>?</h1>
        <form action="/sonic/destroy/<?= $sonic->id ?>" method="POST">
            <button type="submit" class="button">Sí, eliminar</button>
            <a href="/sonic" class="button">Cancel·lar</a>
        </form>
    </section>
</main>

</body>
</html>
