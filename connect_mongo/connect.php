<?php
$connection = new MongoClient();
$db = $connection->leanMongo;
$people=$db->createCollection("people");
?>