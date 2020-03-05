<nav class="navbar fixed-top" style="
background-image: linear-gradient(90deg,#6833cb,#4f52f5); width:100%; top: 0; height: 8.7%; box-shadow: 0 0 10px rgba(33,33,33,.5);">
  <a class="" href="http://datsme.io" >
    <img src="images/logo-white.png" width="150"  alt="" style="margin:1% 30%; ">
  </a>
  <button class="btun" type="button" name="button"><a href="https://play.google.com/store/apps/details?id=me.dats.com.datsme"><strong>Try Datsme</strong></a></button>
</nav>
<div class="" style="margin:1% 5%;">
<div class="" align="center">
<h2 align="" style="margin-top:7%;"><?php echo $rows['btitle']; ?></h2>
<img class="image2" src="/<?php echo $rows['bphoto']; ?>">
<input type="text" value="http://blog.datsme.io/read.php?=<?php echo $rows['bid'];?>" id="myInput" style="display:none;">
<!-- <div class="tooltip">
<button onclick="myFunction()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
  Copy text
  </button>
</div> -->

</div>

<div class="row">
<div class="content col-8">
<p style="margin-bottom:5%; margin-left:5%;"><?php echo nl2br($rows['bcontent']);?></p>

<div class="share" align="center">
  <a id="twitter" style="margin-right:1vw;"href="https://twitter.com/intent/tweet?text=Check%20out%20http://blog.datsme.io/read.php?id=<?php echo $rows['bid'];?>">
  <img src="images/twitter.png" height="25vh" style="margin-right:0.4vw; margin-bottom:2px;">Share</a>
  <a id="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fblog.datsme.io%2Fread.php%3Fid%3D<?php echo $rows['bid'];?>&amp;src=sdkpreparse"><img src="images/facebook.png" height="25vh" style="margin-right:0.4vw; margin-bottom:2px;">Share</a>
<!-- <a id="linkedin" href="https://www.linkedin.com/cws/shareArticle?mini=true&url=http://blog.datsme.io/read.php?id=<?php echo $rows['bid'];?>"><img src="images/linkedin.png" height="25vh" style="margin-right:0.4vw; margin-bottom:2px;">Share</a> -->
  </div>
</div>

<div class="content col-4">
<?php

$result3 = mysqli_query($conn, "SELECT * FROM blog LIMIT 6");


?>
<h5>More Post</h5>
<?php while($row=mysqli_fetch_assoc($result3)){ ?>
<div class="row">
<div class="content col-6">
<img class="img-fluid image" src="/<?php echo $row['bphoto']; ?>" alt="">
</div>
<div class="content col-6">
<h6><?php echo $row['btitle']; ?></h6>


<button type="button" class="btn btn-dark"name="button"><a class="anchor" href="read.php?id=<?php echo $row['bid']; ?>">Read More</a></button>
</div>

</div>
<?php } ?>
</div>
</div>


</div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
