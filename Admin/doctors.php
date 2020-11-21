<?php 
	if(isset($_POST["logout"]))
	{
		 header("Location: login.php");
	}
?>
<html>
	<head></head>
	<body>
		<div>
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			<h3>Howdy, Imran </h3>
			<h4>ID : 1020</h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <a href="userInfo.php">Update users info</a>&nbsp;&nbsp;
			 <a href="delivery.php">Delivery</a>&nbsp;&nbsp;
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Doctors</h3>
		</div>
		<div>
			<form acton="" method="post">
				<table>
					<tr>
						<td>
							<select name="type"><?php include "php_script_admin/doctorType.php"; ?></select>
						</td>
						<td><input type="submit" name="typeSelect" value="Show"></td>
					</tr>
				</table><br>
				<table border=".5">
					<tr>
						<td>Serial No</td>
						<td>Name</td>
						<td>ID</td>
						<td>Type</td>
						<td>Salary</td>
						<td>specialist</td>
						<td>Chamber Time</td>
						<td>Rounding Time</td>
						<td>Operation Time</td>
						<td>Status</td>
					</tr>
					<tr>
						<td>1</td>
						<td>md rakib</td>
						<td>102</td>
						<td>doctor</td>
						<td>150000</td>
						<td>ENT</td>
						<td>8am to 11am</td>
						<td>1pm to 4pm</td>
						<td>6pm to 10pm</td>
						<td>1</td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>