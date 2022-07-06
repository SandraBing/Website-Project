<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Fitzgerald Auctioneers</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<a href="addproperty.php">Add a new property</a>
<p>
<div id="displayproperties">

<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from property";
$result=mysqli_query($link, $sql);
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Product</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$image=$row["image"];
$address1=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$propertyid</td>
<td>&euro; $price</td>
<td>$shortdescription</td>
<td><a href='editproperty.php?propertyid=$propertyid'>Edit</a></td>
<td><a href='confirmdeleteproperty.php?propertyid=$propertyid'>Delete</a></td>
</tr>";
}
echo "</table>";
mysqli_close($link);
?>
<p>
<button onclick="goBack()"> Back </button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>












