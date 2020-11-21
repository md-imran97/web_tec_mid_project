<?php include_once "php_script_admin/validate_registation.php"; ?>
<?php 
	if(isset($_POST["logout"]))
	{
		 header("Location: login.php");
	}
?>

<html>
	<head>
		<style>
			.row{
				display: flex;
			}
			.column{
				flex: 50%;
				padding: 10px;
			}
		</style>
	</head>
	<body>

	<h2>Admin dashboard</h2>
	<div>
			
			<h4>ID : 1020</h4>
			
		</div>
		<div>
			 <a href="home.php">Home</a>&nbsp;&nbsp;
			 <a href="profile.php">My Profile</a>&nbsp;&nbsp;
			 <a href="delivery.php">Delivery</a>&nbsp;&nbsp
			 <a href="profit.php">Profit</a>&nbsp;&nbsp;
			 <a href="doctors.php">Doctors</a>&nbsp;&nbsp;
			 <a href="patients.php">Patients</a>&nbsp;&nbsp;
			 <br><br>
		</div>

		<div class="row">
		  <div class="column">
			<h2>Users Info</h2>
			<form acton="" method="post">
				<table>
					<tr>
						<td>
							<select name="type"><?php include "php_script_admin/user_type.php"; ?></select>
						</td>
						<td><input type="text" name="searchField"></td>
						<td><input type="submit" name="searchButton" value="search"></td>
					</tr>
				</table><br>
				<table border=".5">
					<tr>
						<td>Serial No</td>
						<td>Name</td>
						<td>ID</td>
						<td>Type</td>
						<td>Status</td>
						<td>Salary</td>
					</tr>
					<tr>
						<td>1</td>
						<td>imran</td>
						<td>101</td>
						<td>admin</td>
						<td>1</td>
						<td>50000</td>
					</tr>
					<tr>
						<td>2</td>
						<td>md rakib</td>
						<td>102</td>
						<td>doctor</td>
						<td>1</td>
						<td>150000</td>
					</tr>
				</table>
			</form>
		  </div>
		  <div class="column">
			<h2>Users Info CRUD</h2>
			<form action="" method="post">
				<table>
						<tr>
							<td><input type="text" name="searchField"></td>
							<td><input type="submit" name="searchButton" value="search"></td>
							<td><input type="submit" name="clearField" value="clear"></td>
						</tr>
				</table><br>
				<table>
					<tr>
						<td>First name :</td>
						<td><input type="text" name="firstName" value="<?php echo $firstName; ?>"> <?php echo $err_firstName; ?></td>
					</tr>
					<tr>
						<td>Last name :</td>
						<td><input type="text" name="lastName" value="<?php echo $lastName; ?>"> <?php echo $err_lastName; ?></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"> <?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td>Phone :</td>
						<td><input type="text" name="phone" value="<?php echo $phone; ?>"> <?php echo $err_phone; ?></td>
					</tr>
					<tr>
						<td>Date of Birth :</td>
						<td>
							<select name="birthMonth" ><?php include_once "php_script_admin/month.php"; ?></select>
							<select name="birthDate" ><?php include_once "php_script_admin/date.php"; ?></select>
							<select name="birthYear" ><?php include_once "php_script_admin/year.php"; ?></select>
							<?php echo $err_birthDay; ?>
						</td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							 <?php echo $err_gender; ?>
						</td>
					</tr>
					<tr>
						<td>User Type :</td>
						<td>
							<select name="userType"><?php include "php_script_admin/user_type _reg.php"; ?></select>
							<?php echo $err_userType; ?>
						</td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password :</td>
						<td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>"> <?php echo $err_confirmPassword; ?></td>
					</tr>
					<tr>
						<td>User Status :</td>
						<td><input type="text" name="status" value="<?php echo $status; ?>"> [0 = pending ; 1 = approved]</td>
					</tr>
					<tr>
						<td>Salary :</td>
						<td><input type="text" name="salary" value="<?php echo $salary; ?>"><?php echo $err_salary; ?></td>
					</tr>
					<tr>
						
						<td colspan="2">
							<br>
							<input type="submit" name="register" value="Register">
							<input type="submit" name="update" value="Update">
							<input type="submit" name="delete" value="Delete">
						</td>
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</form>
		  </div>
		</div>
		<div>
			<form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
		</div>
	</body>
</html>