<DOCTYPE HTML>
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
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);

mysqli_select_db($link, "property");


$sql="SELECT * FROM vendor";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
echo "<table>";
echo "<tr>
				
				<th>Email</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Phone</th>
				<th>Update</th>
				<th>Delete</th>
				</tr>";
while($row=mysqli_fetch_array($result)){
				
				$vendor_email=$row["vendor_email"];
				$vendor_firstname=$row["vendor_firstname"];
				$vendor_surname=$row["vendor_surname"];
				$vendor_phone=$row["vendor_phone"];
echo "<tr>
				
				<td>$vendor_email</td>
				<td>$vendor_firstname</td>
				<td>$vendor_surname</td>
				<td>$vendor_phone</td>
				<td><a href='editvendors.php?vendor_email=$vendor_email'>edit</a></td>
				<td><a href='confirmddeletevendor.php?vendor_email=$vendor_email'>Delete</a></td>
				</tr>";
}
echo"</table>";
mysqli_close($link);

				
?>
</div>
<p>
<button onclick="goBack()"> Back </button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>

<?php include("includes/footer.html");?>
</div>
</body>
</html>
