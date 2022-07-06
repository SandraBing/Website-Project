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


$sql="SELECT * from comment";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
echo "<table>";
echo "<tr>
				<th>id</th>
				<th>Title</th>
				<th>Content</th>
				<th>Author</th>
				<th>Created</th>
				<th>Status</th>
				<th>Update</th>
				<th>Delete</th>
				</tr>";
while($row=mysqli_fetch_array($result)){
				$id=$row["id"];
				$title=$row["title"];
				$content=$row["content"];
				$author_name=$row["author_name"];
				$created_at=$row["created_at"];
				$status=$row["status"];
echo "<tr>
				<td>$id</td>
				<td>$title</td>
				<td>$content</td>
				<td>$author_name</td>
				<td>$created_at</td>
				<td>$status</td>
				<td><a href='updatereviews.php?id=$id' onclick\"return confirm('are you sure you wish to approve this comment?');\">Approve</a></td>
				<td><a href='deletereviews.php?id=$id' onclick\"return confirm('are you sure you wish to approve this comment?');\">Delete</a></td>
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
