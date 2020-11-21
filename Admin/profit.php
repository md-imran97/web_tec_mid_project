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
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Profit</h3>
		</div>
		<div>
			<form acton="" method="post">
				<table>
					<tr>
						<td>
							<select name="profitType">
								<option value="all" selected>All</option>
								<option value="patient">Patient</option>
								<option value="products">products</option>
							</select>
						</td>
						<td><input type="submit" name="profit" value="Profit"></td>
					</tr>
				</table><br>
				<table border=".5">
					<tr>
						<td>Serial No</td>
						<td>Name</td>
						<td>Profit</td>
					</tr>
					<tr>
						<td>1</td>
						<td>product</td>
						<td>500000</td>
					</tr>
					<tr>
						<td>2</td>
						<td>pharmacy</td>
						<td>300000</td>
					</tr>
				</table>
				<br>
				<table border=".5">
					<tr>
						<td>Total Profit :</td>
						<td>800000</td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>