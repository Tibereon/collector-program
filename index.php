<?php
$monsterArray = [];

if (isset($_GET['id'])) {
    $db = new PDO(
        'mysql:host=192.168.20.20; dbname=collection',
        'root',
        ''
    );

    $db->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

    $idToSearchFor = $_GET['id'];

    $sql = $db->prepare(
        'SELECT * FROM `monsters`;'
    );

    $sql->bindParam(
        'id',
        $idToSearchFor,
        PDO::PARAM_INT
    );

    $sql->execute();

    $monsterArray = $sql->fetchAll();
}

function displayMonster($Monsterstats) {
    echo $Monsterstats [0]['type'];
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
        <div class="top-forms">
            <p class="form-text"> Add monster type </p><form class="basic-form" action="index.php" method="get">
                <input type="text" name="id">
                <input type="submit">
            </form>
            <p class="form-text"> Add monster element </p><form class="basic-form" action="index.php" method="get">
                <input type="text" name="id">
                <input type="submit">
            </form>
        </div>
        <div class="stat-form-box">
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">Healthpoints</p>
                </form>
            </div>
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">strength</p>
                </form>
            </div>
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">speed</p>
                </form>
            </div>
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">agilty</p>
                </form>
            </div>
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">armour</p>
                </form>
            </div>
            <div class="wrapper">
                <form class="stat-form-form" action="index.php" method="get">
                    <input type="text" name="id">
                    <input type="submit">
                    <p class="stat-form-text">intelligence</p>
                </form>
            </div>
        </div>
    <section class="monsters">
        <?php
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
        ?>
    </section>
    </body>
</html>