<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare('SELECT * from Member as m, Certification as c, CertificationAssociation as ca
where m.memberGuid=ca.memberGuid and c.certificationId=ca.certificationID;');
$stmt->execute();
$ExpCerts = $stmt->fetchAll();

// Step 3: Convert to JSON
$json = json_encode($ExpCerts, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
echo $json;
