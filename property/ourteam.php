<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Fitzgerald Properties</title>
  <meta charset="utf-8">
  <!--add the viewport tag so we can use media queries-->
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<h2>Meet the Team!</h2>

<div class="card-area"><!-- set up the flex container-->

<div class="card"><!--each card is a child of the card-area flex container-->
<div class="image-holder"><!--the image-holder is a div to hold the image-->
  <img src="mike.avif" alt="male employee">
  </div>
  <div class="container"><!--this container div adds a horizontal rule and holds any text about the employee-->
  <hr>
    <h4>Mike Fitzgerald</h4> 
    <strong>Position: </strong>Company Director
    <p>Mike has been working with the company for 40 years. Starting with an after school job to eventually taking the reins from his father Mike Snr after his retirement in 1998. Mikes expertise is in commercial property. He is a member 
    of the Mayo Chamber of Commerce and the chairperson for the Irish Auctioners Association</p> 
  </div>
</div>

<div class="card">
<div class="image-holder">
  <img src="sharon.jpg" alt="female employee">
  </div>
  <div class="container">
  <hr>
    <h4>Sharon Fitzgerald</h4> 
    <strong>Position: </strong>Auctioneer
    <p>Sharon leads our team. As well as being a capable property agent, Sharon holds a degree in construction management and is passionate about helping self builders find the site of their dreams for their forever home. </p>
</div>
</div>

<div class="card">
<div class="image-holder">
  <img src="kate.jpg" alt="female employee">
  </div>
  <div class="container">
  <hr>
    <h4>Kate Fahy</h4> 
    <strong>Position: </strong>Auctioneer
    <p>Kate has just joined our team after relocating with her family to the West of Ireland. Kates expertise lies in matching vendors with potential buyers. Her particular interest is sustainable housing. </p>
  </div>
</div>

<div class="card">
<div class="image-holder">
  <img src="paul.avif" alt="male employee">
  </div>
  <div class="container">
  <hr>
    <h4>Paul Fitzgerald</h4> 
    <strong>Position: </strong>Auctioneer
    <p>As well as being one of our auctioneers, Brian is a chartered engineer who specialises in building and planning policies. Brian is well placed to advise you as a buyer or a seller what your property may require for a successful transaction</p>
  </div>
</div>

<div class="card">
<div class="image-holder">
  <img src="susan.jpg" alt="female employee">
  </div>
  <div class="container">
  <hr>
    <h4>Susan Fitzgerald</h4> 
    <strong>Position: </strong>Ofice Manager
    <p>Susan is our office manager. Susan will take your queries and guide you to the agent best suited to your needs. Call into our office and Susan can assist you with planning documents for sites or viewing appointments for properties</p>
  </div>
</div>




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

</body>
</html>
