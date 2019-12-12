<?php

	session_start();

	if( isset($_SESSION['counter'])){

		$_SESSION['counter']+=1;

	}else{

		$_SESSION['counter']=1;
	}

	$username="francesco";
	$password="some_pass";
	$database="shop";
	if($_SESSION['counter']==1){
		echo "i har";
		$spectatorkey=rand(999,10000);
		$judgekey=rand(999,10000);
	}
	$conn= new mysqli("localhost",$username,$password,$database);

	if($conn->connect_error){

		die("COnnection failed: " .$conn->connect_error);
	}
#echo "yoooo $spectatorkey $judgekey";
#echo "Connected Successfully";
	$conn->select_db("shop") or die("UNacble to select");
	$query="CREATE TABLE grouping6 (id INT,id2 INT,SchoolName VARCHAR(200), Debate_Date DATE, category VARCHAR(200), StudentName11 VARCHAR(200),StudentName21 VARCHAR(200),SchoolName2 VARCHAR(200),StudentName12 VARCHAR(200),StudentName22 VARCHAR(200))";
	$conn->query("$query");
	$secondquery="INSERT INTO grouping6 (id,id2) VALUES ('{$spectatorkey}','{$judgekey}')";
	$conn->query("$secondquery");
	$thirdquery="SELECT * FROM grouping6";
	$result=$conn->query("$thirdquery");
	$row=$result->fetch_assoc();
	$spectatorkey=$row["id"];
#$fourthquery="SELECT id2 FROM grouping";
	$judgekey=$row["id2"];
#$conn->close();
#echo "broooo $row["id"] $row["id2"]";
#$conn= new mysqli("localhost",$username,$password,$database);
#conn->select_db("shop") or die("Unable to dselct");
	$schoname1=$_POST['school_1'];
	$stuname1_1=$_POST['student1_1'];
	$stuname2_1=$_POST['student2_1'];
	$schoname2=$_POST['school_2'];
	$stuname1_2=$_POST['student1_2'];
	$stuname2_2=$_POST['student2_2'];
	$date=$_POST['date'];
	echo "Yooo $date";
	$category=$_POST['category'];
	echo "name is $stuname2_1 $stuname2_2";
	if(!empty($_POST['student2_1'])){
		echo "done gone here tho";
		$somequery="UPDATE grouping6 SET Debate_Date='{$date}', category= '{$category}', SchoolName='{$schoname1}', StudentName11= '{$stuname1_1}', StudentName21 = '{$stuname2_1}',SchoolName2='{$schoname2}', StudentName12 = '{$stuname1_2}',StudentName22 = '{$stuname2_2}' WHERE id='{$spectatorkey}'";
		$conn->query("$somequery");
	}
#	$somequery="INSERT INTO grouping6 (SchoolName,StudentName11, StudentName21, SchoolName2,StudentName12, StudentName22) VALUES ('{$schoname1}','{$stuname1_1}','{$stuname2_1}','{$schoname2}','{$stuname1_2}','{$stuname2_2}')";
	$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
	<<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<title>Create a New Debate Event</title>
    
    <link rel="stylesheet" type="text/css" href="createpage.css"/>
    
    <script type="text/javascript">
    window.onload = function() {
    	document.getElementById('skey').innerHTML = "<?php echo $spectatorkey ?>";
    	document.getElementById('jkey').innerHTML = "<?php echo $judgekey ?>";
	}

	function addTeams() {
    var form = document.getElementById("pairsform");
    var form2 = form.cloneNode(true);
    document.getElementById("form").insertBefore(form2, document.getElementById("donebutton"));
	}
    </script>
</head>
<body>
	<header>
		<h1>Create a New Debate Event</h1>
	</header>
	
	<nav>
		<a href="index.php">Home</a>
		<a href="aboutpage.php">About</a>
	</nav>
	
	<form id="form" action ="" method="post">
	<!-- First section for general debate information -->
	<div class="debateform">
		<p>Spectator Key: <b id='skey'></b></p>
		
		<p>Judge Key: <b id ='jkey'></b></p>
	
			<label for="date" required>Date of Event: </label>
			<input class="input" type="date" name="date" id="date" name="date" value='<?php echo $name;?>' >
			
			<!--
			<a>Debate Topics (separate by comma):</a>
			<textarea class="input" rows="4" cols="60" name="topics" required> </textarea>
		-->
	</div>
		
	<!-- Vertical flexbox containing information about pairs of teams -->
	
	<div class="wrapper" id="pairsform">
		<!-- Category selection dropdown -->
		<div class="dropdown">
			<label for="category" id="categorylabel">Category: </label>
			<select class="input" id="category" name="category" value='<?php echo $name;?>' required>
				<option value="0" selected></option>
				<option value="Novice">Novice</option>
				<option value="Junior">Junior</option>
				<option value="Senior">Senior</option>
			</select>
		</div>
			
		<!-- Topic -->
		<div>
				
		</div>
		
		<!-- This is a horizontal flexbox meant for holding the two team tables -->
		<div class="teamwrapper" style="float: left">
			<!-- First team -->
			<div class="teamform">
                <h2>Proposition</h2>
            	
				<label for="school_1">School ID: </label>
				<div><input class="input" type="text" name="school_1"  value='<?php echo $name;?>' size="30" id="school_1" required></div>
			
				
				<label for="student1_1">Student 1: </label>
				<div><input class="input" type="text" name="student1_1"  value='<?php echo $name;?>' size="30" id="student1_1" required></div>
				
				<label for="student2_1">Student 2: </label>
				<div><input class="input" type="text" name="student2_1"  value='<?php echo $name;?>' size="30" id="student2_1" required></div>
			</div>
			
			<!-- Second team -->
			<div class="teamform">
                <h2>Opposition</h2>
            
				<label for="school_2">School ID: </label>
				<div><input class="input" type="text" name="school_2"  value='<?php echo $name;?>' size="30" id="school_2" required></div>
			
				<label for="student1_2">Student 1: </label>
				<div><input class="input" type="text" name="student1_2"  value='<?php echo $name;?>' size="30" id="student1_2" required></div>
				
				<label for="student2_2">Student 2: </label>
				<div><input class="input" type="text" name="student2_2"  value='<?php echo $name;?>' size="30" id="student2_2" required/></div>
			</div>
		</div>
	</div>
	
	<button type="submit" id="donebutton">Done</button>
	</form>

	<button id="addbutton" onclick="addTeams()">Add Teams</button>
<!--
	<form action ="" method="post">
	<label> Plese enter data:</label><input type = "text" name="name_of_person" value='<?php echo $name;?>'/><br><br>
	<input name = "form" type="submit" value="Submit"/><br><br>
	</form>-->
</body>

</html>

