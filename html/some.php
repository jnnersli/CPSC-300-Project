
<body>
	<textarea rows=3 cols=10></textarea>
</body>
<?php

$username="francesco";
$password="some_pass";
$database="shop";

$conn= new mysqli("localhost",$username,$password,$database);

if($conn->connect_error){

	die("COnnection failed: " .$conn->connect_error);
}
echo "Connected Successfully";
$conn->select_db("shop") or die("UNacble to select");
$query="CREATE TABLE potluck (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,name VARCHAR(20), food VARCHAR(30),confimred CHAR(1),signupt_date DATE)";
$conn->query("$query");
$conn->close();

?>
