
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Engine</title>
	<style>
	input
	{
		width:500px;
		height: 35px;
		border-radius: 5px;
		border: 1px solid green;


	} 
	#searchbtn
	{
		width: 180px;
		height: 40px;
		border-radius: 5px;
		border: 1px solid green;
		color: orangered;
		font-size: 20px;
		background-color: white;
	}
	#searchbtn:hover
	{
		background-color: darkblue;
		color: white;

	}
	</style>
</head>
<body>
	<br><br><br><br><br>
<center><img src="web crawler.png" width="40%"></center>
<form action="result.php" method="GET">
<br><br>
<center><input type="text" name="search"></center>
<br><br>

<center><input type="submit" name="searchbtn" id="searchbtn" value=" Search"></center>

</body>
</html>