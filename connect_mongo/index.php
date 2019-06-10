<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
// Query Class
$query = new MongoDB\Driver\Query(array());
// Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$cursor = $manager->executeQuery('test.testinsert',$query);
// Convert cursor to Array and print result
//print_r($cursor->toArray());
// echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
if(isset($_POST['name'])){
	$cursor->insert(array("name"=>$_POST['name']));
	// $document = array("name" => $_POST['name']);
	//var_dump($document);
	// $cursor->insert($document);
// $filter  = [];
// $options = ['sort' => ['username' => 1]];
// $client = new MongoDB\Client('mongodb://localhost');
// $client->test->testinsert->find($filter, $options);
 }
?>
<form method="post">
	name:<input type="text" name="name">
	<input type="submit" value="ตกลง">
</form>
</body>
</html>