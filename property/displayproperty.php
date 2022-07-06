<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Fitzgerald Auctioneers</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<div id="displayproperty">


<?php
require 'connect.php';

$categoryid= $_GET["categoryid"];

$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND
category.categoryid=$categoryid";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
$output=mysqli_query($link, $sql);
$getcategory=mysqli_fetch_array($output);
echo "<h4>";


echo $getcategory["categoryname"];
echo "</h4>";
echo "<div class='card-area'>";


while($row=mysqli_fetch_array($result)) {

$categoryid=$row["categoryid"];
$propertyid=$row["propertyid"];
$image=$row["image"];
$address1=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];

echo "<div class='card'>"; //create a card - each card is a child of the card-area flex container
echo "<div class='image-holder'>"; //the image-holder is a div in the card to hold the image
echo "<img src='$image' alt='property' >";
echo "</div>"; //close the image holder
echo "<div class='cardcontainer'>"; //this container div adds a horizontal rule and holds  the property name, description and price
echo "<hr>";
echo  "<h4>$address1</h4>"; //output the property address
echo "<p>&euro; $price</p>"; //output the euro sign and price
echo "<p> $shortdescription</p>"; //output the property description
echo "<div class='moredetails'>"; //this div contains the moredetails button
echo "<p><a href='moredetails.php?propertyid=$propertyid'>Details</a></p>";
echo "</div>"; //close the moredetails div
echo "</div>"; //close the cardcontainer div
echo "</div>"; //close the card

} //end while loop
echo "</div>"; //close the flex container since no more records
}
else //if there are no records in the result set
{
echo "<h4>There are no products in the database</h4>"; //output a message
}

mysqli_close($link);
?>
</div>
<p>
<button onclick="goBack()">Back</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>


</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
