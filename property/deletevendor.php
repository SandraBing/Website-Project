<?php
require 'connect.php';
$vendor_email= $_GET["vendor_email"];
$sql= "DELETE FROM vendor WHERE vendor_email='$vendor_email'";

if (mysqli_query( $link, $sql))
{
 header("Location: http://localhost/property/confirmdeletevendor.php");
 exit;
}
else
{
echo ("The record could not be deleted");
}
mysqli_close($link);
?>