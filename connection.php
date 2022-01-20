<?php
//base pdo db connection, fil in blanks
$host = 'localhost';
$db   = '';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());

}


function display($pdo) {
    $r1 = 'SELECT * FROM ';
    $data = $pdo->query($r1)->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $row){
        echo "<tr>";
        echo $row[''] . "<br/ >";
        echo $row[''] . "<br/ >";
        echo $row[''] . "<br/ >";
        echo $row[''] . "<br/ >";
        echo "<tr />";
    }
}

if (isset($_POST[''])) {
    display($pdo);


?>