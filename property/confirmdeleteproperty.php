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
$propertyid=$_GET['propertyid'];
$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
echo "<h3>Confirm Delete Property</h3>";
echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Property</td>

<td><strong>Price</td>
<td><strong>Description</td>
</tr>";
$row=mysqli_fetch_array($result);
$image=$row["image"];
$address1=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address1</td>
<td>&euro; $price</td>
<td>$shortdescription</td>
</tr>";
echo "</table>";
echo "<p> Are you sure you want to delete this property? <p>
<a href='deleteproperty.php?propertyid=$propertyid'>Delete</a>
<a href='manageproperty.php'>Cancel</a>";
mysqli_close($link);
?>



</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
