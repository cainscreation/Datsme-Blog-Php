<?php
ob_start();
include_once("db_connect.php");
session_start();
$id=$_GET['id'];
$rview = mysqli_query($conn, "SELECT * FROM vieww");
$ra=mysqli_fetch_assoc($rview);

$ip = file_get_contents('https://api.ipify.org');
$result5 = mysqli_query($conn, "SELECT * FROM blog WHERE bid=$id");
$rows=mysqli_fetch_assoc($result5);


if ($ra['ip']!=$ip&&$ra['id']=$id) {

   mysqli_query($conn, "INSERT INTO vieww(ip, id) VALUES('" . $ip . "', '" . $id . "')");
$view=$rows['view'];
$view++;
$query = "UPDATE blog SET  view=' $view ' WHERE bid=$id";
$result = mysqli_query($conn,$query);
}
elseif($ra['ip']!=$ip&&$ra['id']=$id) {
  mysqli_query($conn, "INSERT INTO vieww(ip, id) VALUES('" . $ip . "', '" . $id . "')");
$view=$rows['view'];
$view++;
$query = "UPDATE blog SET  view=' $view ' WHERE bid=$id";
$result = mysqli_query($conn,$query);
}

else{

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $rows['btitle'];?></title>
    <link rel="shortcut icon" href="images\datsme.png">
    <link rel="stylesheet" href="css/images.css">
    <link rel="me" href="https://twitter.com/twitterdev">
    <link rel="stylesheet" href="css/mob.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="web">

      <?php include("webread.php"); ?>
    </div>
    <div class="mob">
      <?php include("mobread.php"); ?>

    </div>

<footer class="page-footer font-small" style=" color:white;" align="center" >
<div class="top-svg" style="height:100px">
</div>
    <!-- Footer Links -->
  <div style="background-color:#3939a4;">
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-capitalize mt-3 mb-4" style=" color:white;">Company</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">About</a>
            </li>
            <li>
              <a href="#!">Contact Us</a>
            </li>
            <li>
              <a href="#!">Jobs</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-capitalize mt-3 mb-4" style="color:white;">Products</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Home</a>
            </li>
            <li>
              <a href="#!">How it Works</a>
            </li>
            <li>
              <a href="http://blog.datsme.io">Blog</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-capitalize mt-3 mb-4" style="color:white;">Legal</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Terms of use</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-capitalize mt-3 mb-4" style="color:white;">Social</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Facebook</a>
            </li>
            <li>
              <a href="#!">LinkedIn</a>
            </li>
            <li>
              <a href="#!">Instagram</a>
            </li>
            <li>
              <a href="#!">Twitter</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">©️ Different Angle 42 Pvt. Ltd.
    </div>
  </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/copy.js" charset="utf-8"></script>
</body>

</html>
