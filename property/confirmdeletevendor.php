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
$vendor_email=$_GET['vendor_email'];
$sql="SELECT * FROM vendor WHERE vendor_email=$vendor_email";
$result=mysqli_query($link, $sql);
echo "<h3>Confirm Delete Vendor</h3>";
echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Description</td>
</tr>";
$row=mysqli_fetch_array($result);
$vendor_email=$row["vendor_email"];
echo "<tr>

<td>$vendor_firstname</td>
</tr>";
echo "</table>";
echo "<p> Are you sure you want to delete this vendor? <p>
<a href='deletevendor.php?vendor_email=$vendor_email'>Delete</a>
<a href='editvendors.php'>Cancel</a>";
mysqli_close($link);
?>



</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
