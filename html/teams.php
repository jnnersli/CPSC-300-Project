<?php
	$username="francesco";
	$password="some_pass";
	$database="shop";
	if($_SESSION['counter']==1){
		echo "i har";
		$spectatorkey=rand(999,10000);
		$judgekey=rand(999,10000);
	}
	$conn = new mysqli("localhost",$username,$password,$database);

	if($conn->connect_error){

		die("COnnection failed: " .$conn->connect_error);
	}

	$conn->select_db("shop") or die("UNacble to select");
	$query = "SELECT * FROM grouping6";
	$result=$conn->query("$query");
	$row=$result->fetch_assoc();
	$team1 = $row["SchoolName"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Teams by School</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="teams.css">

	<script type="text/javascript">
    window.onload = function() {
    	document.getElementById('a').innerHTML = "<?php echo $team1 ?>";
	}
    	
    </script>
</head>
<body>
	<header>
		<h1>Teams by School</h1>
	</header>
	
	<nav>
		<a href="index.php">Home</a>
		<a href="aboutpage.php">About</a>
	</nav>

	<div class=container>
		<h2 id="a"></h2>
	</div>
</body>
</html>