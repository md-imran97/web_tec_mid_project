<?php
	
	for ($i = 1980; $i < 2006; $i++) {
		if($i == 1980)
		{

			echo "<option value='$i' disabled selected>Year</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
	}
?>