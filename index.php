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
        $output = "";
        foreach($monsterArray as $item) {
            $output .= '<div class="card-container">' .
                '<div class="card">';
                    $output .= '<div class="card-title">' . $item['type'] . '</div>' .
                    '<div class="card-text">Element = '  . $item['element'] . '</div>' .
                    '<div class="card-text">Healthpoints = '  . $item['healthpoints'] . '</div>' .
                    '<div class="card-text">Strength = '  . $item['strength'] . '</div>' .
                    '<div class="card-text">Speed = ' . $item['speed'] . '</div>' .
                    '<div class="card-text">Armour = ' . $item['armour'] . '</div>' .
                    '<div class="card-text">Intelligence = '  . $item['intelligence'] . '</div>' .
                '</div>' .
           '</div>';
        }
        return $output;//Return string variable here after appending elements to the variable. View page source to get correct output.
    }
        
?>

<html lang="en">
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