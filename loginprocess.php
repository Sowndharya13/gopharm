

<html>
<head><style>
div {
    background-color: lightgrey;
    width: 800px;
    border: 20px solid blue;
    padding: 30px;
    margin: 40px;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'database.php'; ?>
<?php

// create a variable

$user_id=$_POST['user_id'];
$password=$_POST['password'];

    
	echo "
	<div>
	<center><b>Welcome... " .$user_id ."</b><br><br><br>";
	echo "
	
	";
	echo "
	<a href='index2.php'>Go to shop</a></div>";


?> </body>
</html>