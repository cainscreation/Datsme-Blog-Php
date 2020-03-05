

<div class="web">

<nav class="navbar fixed-top" style="background-image: linear-gradient(90deg,#6833cb,#4f52f5); width:100%; top: 0; height: 8.7%; box-shadow: 0 0 10px rgba(33,33,33,0.5);">
  <a class="anchor" class="" href="http://datsme.io" >
    <img src="images/logo-white.png" width="150"  alt="" style="margin:1% 30%;">
    <button class="btun" type="button" name="button"><a class="anchor-black" href="https://play.google.com/store/apps/details?id=me.dats.com.datsme"><strong>Try Datsme</strong></a></button>
  </a>
</nav>
<div class="layer1">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" align="center" style="overflow:hidden;">
    <div class="carousel-inner" style="overflow:hidden;">
      <?php
      $resut = mysqli_query($conn, "SELECT * FROM blog LIMIT 1");//selecting from row of the email
      while($rows=mysqli_fetch_assoc($resut)){
      ?>
      <div class="carousel-item active">
        <img class="d-block" src="<?php echo $rows['bphoto']; ?>" alt="First slide" style="border-radius: 25px;width: 49vw;
          height: 55vh;
          object-fit: cover;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:300%;"><?php echo $rows['btitle']; ?></h1>

        </div>
      </div>

<?php } ?>
<?php
$resut = mysqli_query($conn, "SELECT * FROM blog LIMIT 1,5");//selecting from row of the email
while($rows=mysqli_fetch_assoc($resut)){
?>
<div class="carousel-item">
  <img class="d-block" src="<?php echo $rows['bphoto']; ?>" alt="First slide" style="border-radius: 25px;   width: 49vw;
    height: 55vh;
    object-fit: cover;">
  <div class="carousel-caption d-none d-md-block">
    <h1 style="font-size:300%;"><?php echo $rows['btitle']; ?></h1>

  </div>
</div>

<?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h1 style="text-align:center;">Most Viewed Blog</h1>
<div class="layer2" style=" margin:0 5%;display: flex;">
  <div class="content col-6" style=" margin:2%; text-align:center;" align="left">
    <?php
    $r = mysqli_query($conn, "SELECT * FROM blog WHERE bid='4'");//selecting from row of the email
    while($rows=mysqli_fetch_assoc($r)){
    ?>
    <img class="leftimg" src="<?php echo $rows['bphoto']; ?>" alt="" width="90%" style="margin:2% 5%; ">
    <h4 style="margin:2%;"><?php echo $rows['btitle']; ?></h4>
    <p style="margin: 3% 8%; color:grey;"><?php echo substr($rows['bcontent'],0,500); ?>....</p>
    <button type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=<?php echo $rows['bid']; ?>">Read More</a></button>

  <?php } ?>
  </div>
  <div class="content col-6" style="">
  <?php
  $result = mysqli_query($conn, "SELECT * FROM blog LIMIT 3");//selecting from row of the email
  while($rows=mysqli_fetch_assoc($result)){
  ?>
    <div class="" style="padding:2% 0 0 0;">
      <img src="<?php echo $rows['bphoto']; ?>" class="imag" style="margin:4% 2%;">
    <div class="" style="width:40%; float:right; margin:4% 2%  0 0;">
      <h5><?php echo $rows['btitle'] ?></h5>
          <p class="help"><?php echo substr($rows['bcontent'],0,100); ?>...</p>
          <button type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=<?php echo $rows['bid']; ?>">Read More</a></button>
        </div>
      </div>
<?php } ?>
</div>

    </div>



<h1 style="text-align:center; margin: 0 5% 3% 5%;">Latest Blog</h1>
<div class="Latest row" style="margin-left: 5%; margin-right: 5%;">

  <?php
$result5 = mysqli_query($conn, "SELECT * FROM blog");//selecting from row of the email
  while($rows=mysqli_fetch_assoc($result5)){
?>
<div class="content col-6" align="left">
    <img class="image" src="<?php echo $rows['bphoto']; ?>" alt="">

    <div class="pad">
      <h3><?php echo $rows['btitle'] ?></h3>
      <p class="help" style=" color:grey; margin-right:8%;"><?php echo substr($rows['bcontent'],0,200); ?>...</p>
      <button type="button" class="btn btn-dark" name="button"><a class="anchor" href="read.php?id=<?php echo $rows['bid']; ?>">Read More</a></button>

    </div>
   </div>
  <?php
    }?>

</div>
</div>
