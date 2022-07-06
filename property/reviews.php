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
<php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
?>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from comment";
$result=mysqli_query($link, $sql);
echo "<table>";
echo "<tr>
<th> Title</th>
<th>Content</th>
<th>Author</th>
<th>Created</th>
</tr>";
while($row=mysqli_fetch_array($result)){
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
</tr>";
}
echo "</table>";
mysqli_close($link);

?>

<div id="addreview">
<h3>Add a Review</h3>
<p>Please leave your feedback on your experience of our site. We appreciate your feedback and
take all your comments into consideration! </p>
<!--form for user to enter feedback -->
<form method="post" action="process.php" id="commentform">
<label>Title: </label>
<input type="text" name="title" required="required"><br>
<label>Content: </label>
<textarea name="content" rows="8" cols="30" required="required"></textarea><br>
<label>Name:</label>
<input type="text" name="author_name" required="required"><br>
<label>Email: </label>
<input type="email" name="author_email" required="required" ><br>
<input type="submit" id="mysubmit" name="submit" value="Add Comment"required="required" >
</form>
</div>
</div>
<p>
<button onclick="goBack()">Back</button>
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
