<!DOCTYPE html>
<html>
<head>
	<title>Input Character</title>
</head>
<body>
<h1> Calendar deel 2</h1>

<center>

<table>
<tr>
<td>Firstname :  </td>

<td> <input type="text" name="firstname" value="<?php echo $_GET['name']; ?>"> </td>

</tr>	

<tr>
<td>Datum : </td>
<td> <input type="text" name="datum"> </td>
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