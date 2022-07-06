<?php
require 'connect.php';
//The following code checks if the submit button is clicked and updates the data in the database accordingly
if(isset($_POST['submit']))
{
 //store the data posted in the form in variables and use real escape string to clean data fields the user can enter
 $propertyid=$_POST['propertyid'];
 $address1=mysqli_real_escape_string($link,$_POST['address1']);
 $price=mysqli_real_escape_string($link,$_POST['price']);
 $shortdescription=mysqli_real_escape_string($link,$_POST['shortdescription']);
 $longdescription=mysqli_real_escape_string($link,$_POST['longdescription']);
 $vendor_email=$_POST["vendor_email"];
 $categoryid=$_POST["category"];
 $image=mysqli_real_escape_string($link,$_POST['image']);
 //query to update the fields in the product record
 $sql= "UPDATE property SET address1='$address1', price='$price',
shortdescription='$shortdescription', longdescription='$longdescription', vendor_email='$vendor_email',
categoryid='$categoryid', image='$image' WHERE propertyid=$propertyid";
 //if the query is successful return to the manageproducts page, otherwise output an error message
 if (mysqli_query( $link, $sql))
 {
 header("Location: http://localhost/property/manageproperty.php");
 exit;
 }
 else
{
 echo "Could not update property";
}
}
mysqli_close($link);
?>