<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="background-image: url('../Asset/back.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/" target="_blank">facebook |</a>
				<a href="https://twitter.com/?lang=en" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/" target="_blank">linkdin</a>

			</td>
			<td width="85%" colspan="2">
				<h1 align="center"><font face="Garamond" color="Black">Welcome to Agricultural Bangladesh</font></h1>
				<?php

					echo "Today is " . date("d.m.Y")." ";
					echo  "(".date("l").")";
				?>
				<h5>
				<h4 align="right">
					<a href="Home.php" class="button">Home</a>
					<a href="Logout.php">Logout</a>
				</h4>				
			</td>
		</tr>
		<tr height="500px">
			<td  rowspan="3">
				<h3>
				<a href="Admin Profile.php/" target="_blank">Admin Profile</a><br><br>
		<a href="Employee Information.php/" target="_blank">Employee Information</a><br><br>
        <a href="Employee Salary.php/" target="_blank">Employee Salary</a><br><br>
        <a href="Seller Info.php/" target="_blank">Seller Info</a><br><br>
        <a href="Verified Seller List.php/" target="_blank">Verified Seller List</a><br><br>
 
        <a href="Seller Feedback.php/" target="_blank">Seller Feedback</a><br><br>
        <a href="Customer Info.php/" target="_blank">Customer Info</a><br><br>
        <a href="Approve New Registration.php/" target="_blank">Approve New Registration</a><br><br>
        <a href="Customer Order.php/" target="_blank">Customer Order</a><br><br>
        <a href="Transiction.php/" target="_blank">Transaction</a><br><br>
        <a href="Customer Feedback.php/" target="_blank">Customer Feedback</a><br><br>
        <a href="News & Info.php/" target="_blank">News & Info</a><br><br>
   
			</h3>
			</td>
			<td>
				
    			<h3> 
    				<?php
					$file = fopen("../Asset/Home.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
				</h3>
				<div class="bg-image">
					<img src="../Asset/Home1.jpg" height="350" width="300" >
					
				<img src="../Asset/Home2.jpg"height="350" width="300">
				
				
				<img src="../Asset/Home3.jpg" height="350" width="300" >
				
				<img src="../Asset/Home4.jpg" height="350" width="300">

				<img src="../Asset/Home5.jpg" height="350" width="300">

				<img src="../Asset/Home6.jpg" height="350" width="300">

				</div>
			</td>
			
		</tr>
	</table>

</body>
</html>