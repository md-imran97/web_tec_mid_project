<?php
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["id"]=="")
	{
		header("Location: login.php");
	}
	
?>
<?php  
	
	$searchField="";
	$set=true;
	
	if(isset($_POST["searchButton"]))
	{
		if(!isset($_POST["type"]))
		{
			$set=false;
		}
	}else{$set=false;}
	
	if(isset($_POST["logout"]))
	{
		 session_unset();
		 session_destroy(); 
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
			<h3>Howdy, <?php echo $_SESSION["username"] ?> </h3>
			<h4>ID : <?php echo $_SESSION["id"] ?> </h4>
			
		</div>
		<div>
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <a href="userInfo.php">Update users info</a>&nbsp;&nbsp;
			 <a href="delivery.php">Delivery</a>&nbsp;&nbsp;
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>
		<div>
			<h3>Home</h3>
		</div>
		<div>
			<form acton="" method="post">
				<table>
					<tr>
						<td>
							<select name="type"><?php include "php_script_admin/user_type.php"; ?></select>
						</td>
						<td><input type="text" name="searchField" placeholder="type user ID"></td>
						<td><input type="submit" name="searchButton" value="search"></td>
					</tr>
				</table><br>
				<table border=".5">
					<tr>
						<td>Serial No</td>
						<td>Name</td>
						<td>ID</td>
						<td>Type</td>
						<td>Salary</td>
						<td>Status</td>
					</tr>
					<?php 
						if($set)
						{
						echo "
							<tr>
								<td>1</td>
								<td>md imran</td>
								<td>101</td>
								<td>admin</td>
								<td>50000</td>
								<td>1</td>
							</tr>
							<tr>
								<td>2</td>
								<td>md rakib</td>
								<td>102</td>
								<td>doctor</td>
								<td>150000</td>
								<td>0</td>
							</tr>";
						}
					?>
				</table>
			</form>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>