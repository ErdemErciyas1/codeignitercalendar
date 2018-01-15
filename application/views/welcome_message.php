<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	</style>
</head>
<body>


	<center>Add user</center>

	<center>
	<?php echo form_open('Welcome/add_user'); ?>
	<table>
	<tr>
	<td>FirstName :</td>
	<td><input type="text" name="firstname"></td>
	</tr>
	<tr>
	<td>LastName :</td>
	<td><input type="text" name="lastname"></td>
	</tr>
	<tr>
	<td> 
	<input type="submit" name="add" value="Add">
	</td>
	</tr>
	</table>
	
	</center>
</body>
</html>