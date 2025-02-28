<?php
try {
    $host = '127.127.127.0';
    $dbname = 'music';
    $user = 'music';
    $password = '123';
    $port = 5432; // Default PostgreSQL port

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $db = new PDO($dsn);
    $query = $db->query('SELECT * FROM top_chart');
    var_dump($query->fetchAll(PDO::FETCH_ASSOC));
    echo "Connected to PostgreSQL successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
