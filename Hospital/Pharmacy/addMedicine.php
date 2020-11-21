<div>
    <form method="post" action="" name="frmmedicine" onSubmit="return validateform()">
    <table width="418" border="3">
      <tbody>
        <tr>
          <td width="34%">Medicine Name</td>
          <td width="66%"><input type="text" name="medicinename" id="medicinename" value="" /></td>
        </tr>
        <tr>
          <td width="34%">Medicine cost</td>
          <td width="66%"><input type="text" name="medicinecost" id="medicinecost" value="" /></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="description" id="description" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="text" name="quantity" id="quantity" value=""/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="add" id="add" value="Add" /></td>
        </tr>
      </tbody>
    </table>
    </form>
	</div>
	<a href="medicine.php">Back</a>