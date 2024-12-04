<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Joc - Sonic</title>

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
        <h1>Editar Joc de Sonic</h1>
        <form action="/sonic/update/<?= $sonic->id ?>" method="POST">
            <div>
                <label for="name">Nom del Joc</label>
                <input type="text" id="name" name="name" value="<?= $sonic->name ?>" required>
            </div>
            <div>
                <label for="releaseYear">Any de Lançament</label>
                <input type="number" id="releaseYear" name="releaseYear" value="<?= $sonic->releaseYear ?>" required>
            </div>
            <div>
                <label for="platform">Plataforma</label>
                <input type="text" id="platform" name="platform" value="<?= $sonic->platform ?>" required>
            </div>
            <div>
                <label for="genre">Gènere</label>
                <input type="text" id="genre" name="genre" value="<?= $sonic->genre ?>" required>
            </div>
            <div>
                <label for="developer">Desenvolupador</label>
                <input type="text" id="developer" name="developer" value="<?= $sonic->developer ?>" required>
            </div>
            <button type="submit" class="button">Desa Canvis</button>
        </form>
    </section>
</main>

</body>
</html>
