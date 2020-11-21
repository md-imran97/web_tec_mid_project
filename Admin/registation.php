<?php include_once "php_script_admin/validate_registation.php"; ?>

<html>
	<head></head>
	<body>
		<div>
			<h1>XYZ Hospital</h1>
		</div>
		<div>
			 <div>
			 <a href="base_home.php">Home Page</a>&nbsp;&nbsp;
			 <a href="login.php">User Login</a>&nbsp;&nbsp;
			 <a href="">Hospital Bed or Cabin Booking</a>&nbsp;&nbsp;
			 <a href="about.php">About Us</a>&nbsp;&nbsp;<br>
			 <br><br>
		</div>
			 
			 <br><br>
		</div>
		<div>
			<h3>User Registation</h3>
			<form action="" method="post">
				
				<table>
					<tr>
						<td align="right">First name :</td>
						<td><input type="text" name="firstName" value="<?php echo $firstName; ?>"> <?php echo $err_firstName; ?></td>
					</tr>
					<tr>
						<td align="right">Last name :</td>
						<td><input type="text" name="lastName" value="<?php echo $lastName; ?>"> <?php echo $err_lastName; ?></td>
					</tr>
					<tr>
						<td align="right">Email :</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"> <?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td align="right">Phone :</td>
						<td><input type="text" name="phone" value="<?php echo $phone; ?>"> <?php echo $err_phone; ?></td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" name="addressStreet" value="<?php echo $addressStreet; ?>"><?php echo $err_address; ?>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" name="addressCity" value="<?php echo $addressCity; ?>"> - <input type="text" placeholder="State" size="11" name="addressState" value="<?php echo $addressState; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip" name="addressZip" value="<?php echo $addressZip; ?>">
						</td>
					</tr>
					<tr>
						<td align="right">Date of Birth :</td>
						<td>
							<select name="birthMonth" ><?php include_once "php_script_admin/month.php"; ?></select>
							<select name="birthDate" ><?php include_once "php_script_admin/date.php"; ?></select>
							<select name="birthYear" ><?php include_once "php_script_admin/year.php"; ?></select>
							<?php echo $err_birthDay; ?>
						</td>
					</tr>
					<tr>
						<td align="right">Gender :</td>
						<td>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							<?php echo $err_gender; ?>
						</td>
					</tr>
					<tr>
						<td align="right">User Type :</td>
						<td>
							<select name="userType"><?php include_once "php_script_admin/user_type _reg.php"; ?></select>
							<?php echo $err_userType; ?>
						</td>
					</tr>
					<tr>
						<td align="right">Password :</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"> <?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password :</td>
						<td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>"> <?php echo $err_confirmPassword; ?></td>
					</tr>
					<tr>
						<td align="right">ID :</td>
						<td><?php echo $id; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><br><input type="submit" name="register" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>