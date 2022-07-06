<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Fitzgerald Properties</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">


<?php
require 'connect.php';

$vendor_email=$_GET["vendor_email"]; //retrieve the vendor email passed in the url

$sql="SELECT * FROM vendor WHERE vendor_email='$vendor_email'";

$result=mysqli_query($link, $sql); //run the query
$row=mysqli_fetch_array($result); //store the recordset in $row
//retrieve the database fields from the recordset and assign to variables for output
$vendor_email=$row["vendor_email"];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];

?>
<!--write out the existing fields into the form fields-->
<form method="post" action="processvendoredit.php">
<input type="hidden" name="vendor_email" value="<?php echo $vendor_email; ?>"/>
<table>

<tr>

<td>Vendor Name:</td><td><input type="text" name="vendor_firstname" value="<?php echo
$vendor_firstname; ?>"/></td>
</tr>

<tr>
<td>Surname</td><td><input type="text" name="vendor_surname" value= "<?php echo $vendor_surname; ?>" /></td>
</tr>

<tr>
<td>Vendor Email: </td>
<td>
<!--create a select box with dropdown email options taken from the database as this is more user
friendly-->
<select name="vendor_email" required="required">
<?php
echo "<option value = '$vendor_email'>$vendor_email</option>"; //display the current value at the top
$sql="SELECT vendor_email FrOM vendor" ; //choose all the other possible options from the database table
$result=mysqli_query($link,$sql); //run the query
if (mysqli_num_rows($result) >0) { //if records exist, output them as dropdown options
while ($row=mysqli_fetch_array($result)){
 $vendor_email=$row['vendor_email'];
 echo "<option value='$vendor_email'>$vendor_email</option>";
//set the value of the option selected and show the user the possible email addresses
 }
} ?>


</select>
</td>
</tr>


<tr>
<td><input type="submit" name="submit" value="Edit Vendor"/></td>
</tr>
</table>
</form>
<?php 
mysqli_close($link); 
?>


</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
