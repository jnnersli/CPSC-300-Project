<!-- This is the code for the home page -->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <script>
    var xhr = new XMLHttpRequest();
    function createrequest() {
        xhr.open('POST', "localhost:8000", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("hi");
        xhr.onreadystatechange = processRequest;
    }
    
    function processRequest(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
        // time to partay!!!
        var response = JSON.parse(xhr.responseText);
        alert(response.ip);
    }
}
    </script>
</head>

<body onload="createrequest()">
	<header>
		<h1>Welcome to Debate Reporter</h1>
	</header>
	
	<nav>
		<a href="aboutpage.php">About</a>
	</nav>
	
	<div class=container>
		<h2> Make judging debates super simple.</h2>
		
		<form action="createpage.php" method="post">
			<button type="submit" id="button1">Start a new event</button>
		</form>

		<form action="loginpage.html" method="post">
			<button type="submit" id="button2">Join an existing debate</button>
		</form>
	</div>
</body>
</html>
