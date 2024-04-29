<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<header>
    <h1 class="titolo"><b>TestHub</b></h1>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profile') }}">Area Utente</a>
        <div class="menu-tendina">
            <a href="#" class="menu-tendina-titolo">Gestione Esami</a>
            <ul class="menu-tendina-contenuto nascosto" >
                <li><a href="{{ route('creaesame') }}">Crea Esame</a></li>
                <li><a href="{{ route('showesami') }}">Modifica Esame</a></li>
                <li><a href="{{ route('revisionaesame') }}">Revisiona Esame</a></li>
                <li><a href="{{ route('pubblicaesame') }}">Pubblica Esame</a></li>
                <li><a href="{{ route('eliminaesame') }}">Elimina Esame</a></li>
            </ul>
        </div>
        <a href="{{ route('biblioteca') }}">Biblioteca</a>
        <form action="{{ route('logout') }}" method="GET">
    @csrf
    <button class="logout" type="submit">Logout</button>
</form>

    </nav>

</header>
<main>
    <section class="presentazione">
        <h2>Benvenuti su TestHub!</h2>
        <p>
            TestHub è la piattaforma di apprendimento che rivoluziona il modo di insegnare e apprendere.
        </p>
        <h2>Perché scegliere TestHub?</h2>
    </section>

    <section class="vantaggi">
        <img class="logo-home" src="{{ asset('img/ExerciseLogo.png') }}">

        <ul>
            <li>
                <h3>Migliora l'apprendimento</h3>
                <p>Le attività interattive rendono l'apprendimento più coinvolgente e stimolante.</p>
            </li>
            <li>
                <h3>Aumenta la motivazione</h3>
                <p>Gli studenti possono vedere i loro progressi in tempo reale e questo li motiva a fare sempre meglio.</p>
            </li>
            <li>
                <h3>Riduce il tempo di correzione</h3>
                <p>I docenti possono monitorare i progressi degli studenti in tempo reale e questo riduce il tempo necessario per la correzione degli elaborati.</p>
            </li>
        </ul>
    </section>
</main>
<footer>
    <p>&copy; 2024 TestHub</p>
</footer>
</body>
</html>
