<?php

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

    $results = $sql->fetchAll();

    var_dump($results);
}

?>

<html>
<body>
<form action="index.php" method="get">
    <input type="text" name="id">
    <input type="submit">
</form>
</body>
</html>
