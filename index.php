<?php
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

    function createCards($monsterArray) {
        foreach($monsterArray as $item) {
            echo '<div class="card-container">';
                echo '<div class="card">';
                    echo '<div class="card-title">' . $item['type'] . '</div>';
                    echo '<div class="card-text">Element = '  . $item['element'] . '</div>';
                    echo '<div class="card-text">Healthpoints = '  . $item['healthpoints'] . '</div>';
                    echo '<div class="card-text">Strength = '  . $item['strength'] . '</div>';
                    echo '<div class="card-text">Speed = ' . $item['speed'] . '</div>';
                    echo '<div class="card-text">Agilty = ' . $item['agility'] . '</div>';
                    echo '<div class="card-text">Armour = ' . $item['armour'] . '</div>';
                    echo '<div class="card-text">Intelligence = '  . $item['intelligence'] . '</div>';
                echo '</div>';
            echo '</div>';
        }
    }

?>
<html lang="en">
    <head>
        <title>Monster collection</title>
        <link rel ="stylesheet" type="text/css" href="index.css">
        <meta name="viewport contents" content="device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div class="Hero-container">
                <h1 class="Hero">Monster collection</h1>
            </div>
        </header>
    <section class="monsters">
        <?php createCards($monsterArray) ?>
    </section>
    </body>
</html>