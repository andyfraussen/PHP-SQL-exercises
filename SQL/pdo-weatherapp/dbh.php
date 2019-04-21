<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8mb4', 'debian-sys-maint', '7lnjYKVW8vCfNCSB');
}
catch(PDOException $e)
{
    die ("Connection failed: ". $e->getMessage());
}

// Fetch data
$sql = "SELECT * FROM Weather";
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

// Inject data
if (isset($_POST['insert']))
{
    $city = $_POST['city'];
    $high = $_POST['high'];
    $low = $_POST['low'];

    $data = [
        'city' => $city,
        'high' => $high,
        'low' => $low,
    ];

    $sqlInsert = "INSERT INTO Weather (city, high, low) VALUES (:city, :high, :low)";
    $sqlExec = $pdo->prepare($sqlInsert);
    $sqlExec->execute($data);
    header("Location: index.php");
}

/* NOT WORKING DELETE BTN
if (isset($_POST['delbtn'])) {
    $todelete = $_POST['delrow'];
    $stmt = $pdo->prepare("DELETE FROM Weather WHERE id = ?");
    foreach ($todelete as $id)
        $stmt->execute($id);
}
*/