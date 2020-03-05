<?php include("nav.php"); ?>

<div class="" style="margin:1% 5%;">
<div class="" align="center">
<h4 align="" style="margin-top:10vh;"><?php echo $rows['btitle']; ?></h4>
<img class="imag-mob" src="/<?php echo $rows['bphoto']; ?>">
</div>

<div class="row">
<div class="content col-12">
<p style="margin-top:5%; margin-bottom:5%; margin-left:5%; font-size:90%;"><?php echo nl2br($rows['bcontent']);?></p>

</div>


<div class="sharemob">
  <a id="twittermob"style="margin-right:2vw;" href="https://twitter.com/intent/tweet?text=Check%20out%20http://blog.datsme.io/read.php?id=<?php echo $rows['bid'];?>">
  <img src="images/twitter.png" height="15vh" style="margin-right:0.6vw; margin-bottom:2px;">Share</a>
  <a id="facebookmob" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fblog.datsme.io%2Fread.php%3Fid%3D<?php echo $rows['bid'];?>&amp;src=sdkpreparse"><img src="images/facebook.png" height="15vh" style="margin-right:0.6vw; margin-bottom:2px;">Share</a>
  <!-- <a id="linkedinmob" href="https://www.linkedin.com/cws/share?url=http://blog.datsme.io/read.php?id=<?php echo $rows['bid'];?>"><img src="images/linkedin.png" height="15vh" style="margin-right:0.6vw; margin-bottom:2px;">Share</a> -->

  </div>
<div class="content col-12">
<?php
$result3 = mysqli_query($conn, "SELECT * FROM blog LIMIT 3");
?>
<h5>More Post</h5>
<?php while($row=mysqli_fetch_assoc($result3)){ ?>
<div class="row" style="text-align:center;">
<div class="content col-12">
<img class="img-fluid image" src="/<?php echo $row['bphoto']; ?>" alt="">
</div>
<div class="content col-12">
<h6><?php echo $row['btitle']; ?></h6>
<button type="button" class="btn btn-dark"name="button"><a class="anchor" href="read.php?id=<?php echo $row['bid']; ?>">Read More</a></button>
</div>
</div>
<?php } ?>
</div>
</div>


</div>
