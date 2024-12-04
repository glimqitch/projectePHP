<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Joc - Sonic</title>

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
        <h1>Crear Joc de Sonic</h1>
        <form action="/sonic/store" method="POST">
            <div>
                <label for="name">Nom del Joc</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="releaseYear">Any de Lançament</label>
                <input type="number" id="releaseYear" name="releaseYear" required>
            </div>
            <div>
                <label for="platform">Plataforma</label>
                <input type="text" id="platform" name="platform" required>
            </div>
            <div>
                <label for="genre">Gènere</label>
                <input type="text" id="genre" name="genre" required>
            </div>
            <div>
                <label for="developer">Desenvolupador</label>
                <input type="text" id="developer" name="developer" required>
            </div>
            <button type="submit" class="button">Crear</button>
        </form>
    </section>
</main>

</body>
</html>
