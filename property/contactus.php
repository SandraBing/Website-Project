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

<div id="contactus">
<h3>Get in Touch</h3>
<p>Please fill out your detail below and the nature of your enquiry and we shall have one of  our agents contact you as soon as possible</p>
<!--form for user to enter feedback -->
<form method="post" action="contactprocess.php" id="contactform">
<label>Title: </label>
<input type="text" name="title" required="required"><br>
<label>Content: </label>
<textarea name="content" rows="8" cols="30" required="required"></textarea><br>
<label>Name:</label>
<input type="text" name="author_name" required="required"><br>
<label>Email: </label>
<input type="email" name="author_email" required="required" ><br>
<input type="submit" id="mysubmit" name="submit" value="Contact Me"required="required" >
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
