<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Admin Profile</title>
</head>
<body>
	<div style="background-image: url('../Asset/oo.jpg');">
	<table border="1" width="100%">
		<tr height="110px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/" target="_blank">facebook |</a>
				<a href="https://twitter.com/?lang=en" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/" target="_blank">linkdin</a>

			</td>
			<td width="70%" colspan="9">
				<h1 align="center"><font face="Garamond" color="black">Profile</font></h1>
				<h4 align="right">
					<a href="Home.php">Home || </a>
					<a href="Logout.php">Logout</a>
				</h4>				
			</td>
		</tr>
		<tr height="500px">
			<td  rowspan="3">
				
				      <a href="Admin Profile.php">Admin Profile</a><br><br>
		      <a href="Employee Information.php">Employee Information</a><br><br>
           <a href="Employee Salary.php">Employee Salary</a><br><br>
           <a href="Seller Info.php">Seller Info</a><br><br>
         <a href="Verified Seller List.php">Verified Seller List</a><br><br>
 
        <a href="Seller Feedback.php">Seller Feedback</a><br><br>
        <a href="Customer Info.php">Customer Info</a><br><br>
        <a href="Approve New Registration.php">Approve New Registration</a><br><br>
        <a href="Customer Order.php">Customer Order</a><br><br>
        <a href="Transiction.php">Transaction</a><br><br>
        <a href="Customer Feedback.php">Customer Feedback</a><br><br>
        <a href="News & Info.php">News & Info</a><br><br>
			</h3>
			</td>

			<td>
				<table align="center" border="1">
					<tr>
						<td colspan="2"> 
							<h1 align="center"> Asma Islam</h1>
							<center><img src="../Asset/asma.jpg" alt="William" width="100" height="100" >
							<form method="POST" action="../Controller/Fileupload.php" enctype="multipart/form-data">
								<fieldset>
									Image Upload: <input type="file" name="myfile"/>
									<input type="submit" name="submit" value="Submit"/>
								</fieldset>
							</form>

						</td>
					</tr>
					<tr>
						<td><h3>ID</h3></td>
						<td> <h3 align="center">19104005</h3></td>
					</tr>
					<tr>
						<td> <h3>Address</h3></td>
						<td> <h3 align="center">Dhanmondi,Dhaka</h3></td>
					</tr>
					<tr>
						<td> <h3>Email</h3></td>
						<td> <h3 align="center">asmaislam@yahoo.com</h3></td>
					</tr>
					<tr>
						<td> <h3>Phone No.</h3></td>
						<td> <h3 align="center">+012345678, +880123457869</h3></td>
					</tr>
					<tr>
						<td><h3>Date of Birth</h3></td>
						<td><h3 align="center">22-10-1999</h3></td>
					</tr>
					<tr>
						<td><h3>Maretial Status</h3></td>
						<td><h3 align="center">Single</h3></td>
					</tr>
					<tr>
						<td><h3>Joined on</h3></td>
						<td><h3 align="center">01-02-2019</h3></td>
					</tr>
					<tr>
						<td><h3>Salary</h3></td>
						<td><h3 align="center">60,000tk</h3></td>
					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
</html>