<?php
	$patient_name = "";
	$err_patient_name = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$phone_code = "";
	$err_phone = "";
	$cabin_number = "";
	$err_cabin_number = "";
	$address_street = "";
	$address_city = "";
	$address_state ="";
	$address_zip ="";
	$err_address ="";
	$birth_day ="";
	$birth_month ="";
	$birth_year ="";
	$err_birth_date ="";
	$gender ="";
	$err_gender ="";
	$sources = "";
	$err_sources = "";
	$about_disease = "";
	$err_about_disease = "";
	
	if(isset($_POST["Confirm admission"]))
	{
	
		// patient name validation
		if(empty($_POST["patient_name"]))
		{
			$err_patient_name = "*required patient_name";
		}
		else{ $parient_name = htmlspecialchars($_POST["patient_name"]);}
		
		
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				//echo $i ."<br>";
				//echo $pos ."<br>";
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";}
		}
		
		
		// phone validate
		
		if(empty($_POST["code"]))
		{
			$err_phone = "*required code and number";
		}
		else if(!is_numeric($_POST["code"]))
		{
			$err_phone = "*required numeric charecter";
		}
		else{ $phone_code = htmlspecialchars($_POST["code"]);}
		
		if(empty($_POST["number"]))
		{
			$err_phone = "*required code and number";
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = "*required numeric charecter";
		}
		else{ $phone_no = htmlspecialchars($_POST["number"]);}
		
		//cabin validation
		
		if(empty($_POST["number"]))
		{
			  $err_cabin_number = "*required number";
		}
		else if(!is_numeric($_POST["number"]))
		{
			  $err_number = "*required numeric charecter";
		}
		else{ $cabin_number = htmlspecialchars($_POST["number"]);}
		
		
		// address validate
		
		if(empty($_POST["street"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_street = htmlspecialchars($_POST["street"]);}
		
		if(empty($_POST["city"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_city = htmlspecialchars($_POST["city"]);}
		
		if(empty($_POST["state"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_state = htmlspecialchars($_POST["state"]);}
		
		if(empty($_POST["zip"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_zip = htmlspecialchars($_POST["zip"]);}
		
		// birth date validate
		
		if(isset($_POST["day"]))
		{
			$birth_day = $_POST["day"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		if(isset($_POST["month"]))
		{
			$birth_month = $_POST["month"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		if(isset($_POST["year"]))
		{
			$birth_year = $_POST["year"];
		}
		else{$err_birth_date = "*day, month, year required";}
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required";}
		
		// sources validate
		
		if(isset($_POST["sources"]))
		{
			$sources = $_POST["sources"];
		}
		else{$err_sources = "*sources required";}
		
		// about disease validate
		
		if(!empty($_POST["about disease"]))
		{
			$about_disease = htmlspecialchars($_POST["about disease"]);
		}
		else{$err_about_disease = "*about disease required";}
	
	}
?>	
	
<html>
	<head>
		<title>Details</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Admitted patient Details</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="patient_name" value="<?php echo $patient_name; ?>"><?php echo $err_patient_name; ?></td>
					</tr>
					
					
					
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td>
							<input type="text" placeholder="code" size="3" name="code" value="<?php echo $phone_code; ?>"> - <input type="text" placeholder="Number" size="11" name="number" value="<?php echo $phone_no ?>"><?php echo $err_phone; ?>
						</td>
					</tr>
					<tr>
					    <td align="right">Cabin Number:</td>
						<td>
						<input type="text" placeholder="Number"size="4" name="number" value="<?php echo $cabin_number ?>"><?php echo $err_cabin_number; ?>
					</td>
					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" name="street" value="<?php echo $address_street; ?>"><?php echo $err_address; ?>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" name="city" value="<?php echo $address_city; ?>"> - <input type="text" placeholder="State" size="11" name="state" value="<?php echo $address_state; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip" name="zip" value="<?php echo $address_zip; ?>">
						</td>
					</tr>
					<tr>
						<td align="right">Birth Date:</td>
						<td>
							<select name="day" >
								<?php
									
									for ($i = 0; $i < 32; $i++) {
										if($i == 0)
										{

											echo "<option value='' disabled selected>Day</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select>
							<select name="month" >
								<?php
									$months = array("Month","jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
									for ($i = 0; $i < 13; $i++) {
										if($i == 0)
										{

											echo "<option value='$months[$i]' disabled selected>$months[$i]</option>";
										}
										else
										{
											echo "<option value='$months[$i]'>$months[$i]</option>";
										}
									}
								?>						
							</select>
							<select name="year" >
								<?php
									
									for ($i = 1996; $i < 2005; $i++) {
										if($i == 1996)
										{

											echo "<option value='$i' disabled selected>Year</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select><?php echo $err_birth_date; ?>
						</td>
					</tr>
					<tr>
						<td align="right">Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td align="right">About disease:</td>
						<td>
							<textarea name="about disease" value="<?php echo $about_disease; ?>" ></textarea> <?php echo " ".$err_about_disease; ?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="confirm admission" value="confirm admission"></td>
					</tr>
					
				</table>
			</fieldset>
		</form>
	</body>
	
</html>