<?php
ini_set('display_errors', 1);
$content = null;
$web_root = $_SERVER['DOCUMENT_ROOT'];

$whatToLoad = 'matches, oppositions';

require $web_root . "/realmadrid/head.php"; ?>

<body id="wrapper">
<?php
$selectType = "tournament";
require $web_root . "/realmadrid/sideba.php";?>

<main id="page-content-wrapper" class="container">
    <div class="panel panel-primary">
        <header class="panel-heading" >
            <h1 id="headline">
                Fixtures - All tournaments
            </h1>
        </header>

        <div class="panel-body">
            <?php
            $tournamentName = "none";
            $getTotal = true;
            $id = "total";
            $hidden = "";
            include "tournament.php";

            $tournamentName = "La Liga";
            $getTotal = false;
            $id = "laLiga";
            $hidden = "hidden";
            include "tournament.php";

            $tournamentName = "Champions League";
            $getTotal = false;
            $id = "championsLeague";
            $hidden = "hidden";
            include "tournament.php";

            $tournamentName = "Copa del Rey";
            $getTotal = false;
            $id = "copaDelRey";
            $hidden = "hidden";
            include "tournament.php";?>
        </div>
    </div>
</main>
<?php require $web_root . "/realmadrid/js-libraries.php"; ?>
</body>
</html>


