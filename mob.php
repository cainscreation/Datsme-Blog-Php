

<div class="mob">

<?php include("nav.php"); ?>
<div class="mob-layer">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" align="center" style="overflow:hidden;">
    <div class="carousel-inner" style="">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/uploads/1.jpg" alt="First slide" style="border-radius: 25px;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:300%;">The First Shenanigan on Humanity</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/uploads/2.jpg" alt="First slide" style="border-radius: 25px;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:300%;">The Foundation of Datsme : Compatibility</h1>

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/uploads/3.jpg" alt="First slide" style="border-radius: 25px;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:300%;">Compatibility versus Chemistry : A necessary Insight!</h1>
        </div>
      </div>

    </div>
    <a class="anchor" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="anchor" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h1 style="text-align:center;margin: 5% 5% 10% 5%;">Most Viewed Blog</h1>
<div class="mob-layer2" style=" margin:0 5%;">
  <div class="content col-12" style=" margin:2%; text-align:center;" align="left">
    <img class="leftimg" src="/uploads/3.jpg" alt="" width="90%" style="margin:2% 5%; ">
    <h4 style="margin:2%;">Compatibility versus Chemistry : A necessary Insight!</h4>
    <p style="margin: 3% 8%;">These two terminologies (Compatibility and Chemistry) may seem...</p>
    <button style="margin-bottom:2%;" type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=3">Read More</a></button>
  </div>
  <div class="content col-12" style="text-align:center; margin-top:8%;margin-bottom:8%;">
    <h1 style="text-align:center;margin: 5% 5% 10% 5%;">Latest Blog</h1>

  <?php
  $result = mysqli_query($conn, "SELECT * FROM blog LIMIT 3");//selecting from row of the email
  while($rows=mysqli_fetch_assoc($result)){
  ?>
    <div class="">
      <img src="/<?php echo $rows['bphoto']; ?>" class="imag-mob" style="margin:5% 2%;">
    </div>
    <div class="" style="text-align:center; ">
      <h4 align="center" style="margin-top:10%; font-weight:bolder;"><?php echo $rows['btitle'] ?></h4>
          <p class="" align="center" style="margin:3% 5%; color:grey;"><?php echo substr($rows['bcontent'],0,200); ?>....</p>
          <button style="margin-bottom:5%;" type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=<?php echo $rows['bid']; ?>">Read More</a></button>

        </div>
<?php } ?>
</div>

    </div>



<h1 style="text-align:center; margin: 5% 5% 10% 5%;">More Blog</h1>
<div class="Latest row" style="margin-left: 5%; margin-right: 5%;">

  <?php
$result5 = mysqli_query($conn, "SELECT * FROM blog");//selecting from row of the email
  while($rows=mysqli_fetch_assoc($result5)){
?>
<div class="content col-12" align="left" style="">
    <img class="imag-mob" style="margin:3% 5% 3% 0;"src="/<?php echo $rows['bphoto']; ?>" alt="">

    <div class="" style="text-align:center;">
      <h4 style="margin-top:10%; font-weight:bolder;"><?php echo $rows['btitle'] ?></h4>
      <p class="help" style="margin:3% 5%;  color:grey;"><?php echo substr($rows['bcontent'],0,200); ?>....</p>
      <button style="margin-bottom:5%;" type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=<?php echo $rows['bid']; ?>">Read More</a></button>

    </div>
   </div>
  <?php
    }?>

</div>
</div>
