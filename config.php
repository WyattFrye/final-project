<?php
// Database configuration for Books
$host = 'localhost';
$dbname = 'books';
$user = 'fryew06';
$pass = '8973';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Database configuration for ToolsSupplies
$host1 = 'localhost';
$dbname1 = 'ToolsSupplies';
$user1 = 'fryew06';
$pass1 = '8973';
$charset1 = 'utf8mb4';

$dsn1 = "mysql:host=$host1;dbname=$dbname1;charset=$charset1";
$options1 = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdoTools = new PDO($dsn1, $user1, $pass1, $options1);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Database configuration for PlumbingSupplies
$host2 = 'localhost';
$dbname2 = 'PlumbingSupplies';
$user2 = 'fryew06';
$pass2 = '8973';
$charset2 = 'utf8mb4';

$dsn2 = "mysql:host=$host2;dbname=$dbname2;charset=$charset2";
$options2 = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdoPlumbing = new PDO($dsn2, $user2, $pass2, $options2);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Database configuration for FlooringMaterials
$host3 = 'localhost';
$dbname3 = 'FlooringMaterials';
$user3 = 'fryew06';
$pass3 = '8973';
$charset3 = 'utf8mb4';

$dsn3 = "mysql:host=$host3;dbname=$dbname3;charset=$charset3";
$options3 = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdoFlooring = new PDO($dsn3, $user3, $pass3, $options3);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Database configuration for RoofingSupplies
$host4 = 'localhost';
$dbname4 = 'RoofingSupplies';
$user4 = 'fryew06';
$pass4 = '8973';
$charset4 = 'utf8mb4';

$dsn4 = "mysql:host=$host4;dbname=$dbname4;charset=$charset4";
$options4 = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdoRoofing = new PDO($dsn4, $user4, $pass4, $options4);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Database configuration for BuildingSupplies
$host5 = 'localhost';
$dbname5 = 'BuildingMaterials';
$user5 = 'fryew06';
$pass5 = '8973';
$charset5 = 'utf8mb4';

$dsn5 = "mysql:host=$host5;dbname=$dbname5;charset=$charset5";
$options5 = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdoBuilding = new PDO($dsn5, $user5, $pass5, $options5);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$pdo->exec($sql);
?>
