<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare('SELECT * FROM CertificationAssociation');
$stmt->execute();
$association = $stmt->fetchAll();

// Step 3: Convert to JSON
$json = json_encode($association, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
echo $json;
