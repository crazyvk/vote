
<!DOCTYPE html>
<html>
<head>
  <meta name="google" content="notranslate">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Election 2019</title>

  <meta property="og:url"           content="http://bharat-govt.com/voteing" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="भारत का भविष्य" />
  <meta property="og:description"   content="राहुल Vs मोदी " />
  <meta property="og:image"         content="http://bharat-govt.com/voteing/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>

</script>
<?php
$conn = mysqli_connect("localhost","root","","vote");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $modi = 0;
  $rahul = 0;

  $sql = "SELECT count(`id`) as modi FROM `vote` WHERE `vote` = 'modi' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $modi = $row['modi'];
    }
  } 

  $sql = "SELECT count(`id`) as rahul FROM `vote` WHERE `vote` = 'rahul' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $rahul = $row['rahul'];
    }
  } 




?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

</head>
<body>
<?php

$vinner = $_POST['vote'] == 0 ? 'modi':'rahul';
$sql = "INSERT INTO vote (vote) VALUES ('".$vinner."')";

if ($conn->query($sql) === TRUE) {
}


?>
	<div style="width: 100%;background-color: black;">
		
		<div style="box-sizing: border-box;float: " align="center" ><h1><font color="white"><b>महापोल 2019</b></font></h1></div>
		<div style="box-sizing: border-box;float: "align="center"><h3><font color="yellow"><b>भारत का सबसे बड़ा और सटिक पोल ।</b></font></h3>
		</div>
		
	</div>

	<center>

 	<img class="mySlides w3-animate-top"    src="dono.jpg" style="width: 350px;height: 300px;">
	<img class="mySlides w3-animate-bottom" src="modi.png" style="height: 300px;">
	<img class="mySlides w3-animate-bottom" src="rahul1.png" style="height: 300px;">

	<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>

</center>

<div id="poll" align="center">
<h3><font color="red" size="6"><b>भारत का अगला प्रधानमंत्री कौन होगा ?</b></font></h3>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> Modi (<?php echo '1' ; ?>%)
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> Rahul (<?php echo '1'; ?>%)
</div>
</div>

<center>

<!-- Shivrambig -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3297579444944791"
     data-ad-slot="7300801251"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>


<!-- Global site tag (gtag.js) - Google Analytics -->


<script>

</body>
</html>