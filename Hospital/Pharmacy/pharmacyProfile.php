

<div class="wrapper col2">
	<div>
		<a href="">Home</a>
		&nbsp;
		<a href="sales.php">Sales</a>
		&nbsp;
		<a href="">Profit</a>
		&nbsp;
		
	</div>
</div>
<br>
<div class="wrapper col4">
  <div id="container">
      <form class="" action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
      </form>
  </div>
  
  <div>
	
	<table class="order-table">
      <thead>
   
    <table style="width:100%;" border="3">
      <tbody>
        <tr>
          <td>Medicine Name</td>
          <td>Medicine Type</td>
          <td>Quantity</td>
          <td>Company</td>
          <td>Price</td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
  </div>
  <div>
    <h1>Add new Medicine record</h1>
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
          <td>Quantity</td>
          <td><input type="text" name="quantity" id="quantity" value=""/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
	</div>
	<button>Logout</button>
	<a href="addMedicine.php">Add</a>
	<a href="deleteMedicine.php">Delete</a>
	
   
