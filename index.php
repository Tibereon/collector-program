<?php
require_once 'functions.php';

$monsterArray = [];

$db = new PDO(
    'mysql:host=192.168.20.20; dbname=collection',
    'root',
    ''
);

$db->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC
);

$idToSearchFor = $_GET;

$sql = $db->prepare(
    'SELECT * FROM `monsters`;'
);

$sql->execute();

$monsterArray = $sql->fetchAll();

createCards($monsterArray)

?>

<!DOCTYPE html lang="en">
    <head>
        <title>Monster collection</title>
        <link rel ="stylesheet" type="text/css" href="normalise.css">
        <link rel ="stylesheet" type="text/css" href="index.css">
        <meta name="viewport contents" content="device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div class="Hero-container">
                <h1 class="hero">Monster collection</h1>
            </div>
        </header>
    <section class="monsters-containers">
        <?php echo createCards($monsterArray) ?>
    </section>
    </body>
</html>