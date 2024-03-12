<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$con =mysqli_connect ("localhost","root","","emsprojectdata");
if (!$con)
{
die("Could not connect: " . mysql_error());
}
else{
  echo"";
}
$sql = "INSERT INTO users(username,email,password)
VALUES ('$username','$email','$password')";

if ($con->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
 ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sadananda Auditorium, Sambhram Auditorium, Shambhavi Auditorium, Sowparnika Seminar Hall, Phalguni Seminar Hall">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>FFFFFF</title>

    <link rel="stylesheet" href="FFFFFF.css" media="screen">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="css/all.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="xxx">
    <meta property="og:type" content="website">
  </head>


<body class="u-body">
<div class="wrapper">
      <header>
         <nav>
            <div class="menu-icon">
               <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
               <h3><b>EMS</b></h3>
            </div>
            <div class="menu">
               <ul>
                  <li><a href="FFFFFF.php">Home</a></li>
                  <li><a href="status.php">Venue Status</a></li>
                  <li><a href="up.php">Upcoming Events</a></li>
                  <li><a href="login2.php">Login</a></li>


               </ul>
            </div>
         </nav>
         <script>
         $(document).ready(function() {
          $(".menu-icon").on("click", function() {
          $("nav ul").toggleClass("showing");
          });
        });
        $(window).on("scroll", function() {
           if($(window).scrollTop()) {
             $('nav').addClass('black');
          }

           else {
             $('nav').removeClass('black');
          }
        });
        </script>
      </header>
      <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center" id="pageHeaderTitle">Venues available</h1>

            <article class="postcard dark blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="Academic.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue">Academic Block</h1>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Behind Academic Block<br>
                        <i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;5000<br>
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Internet Connection, Sound Systems and Projector Screen
                    </div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><a href="sadanandaslot.html"><i class="fas fa-tag mr-2"></i>Availibility</a></li>

                        <li class="tag__item play blue">
                            <a href="sadananda.html"><i class="fas fa-play mr-2"></i>Book</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="Basketball.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title red">BasketBall Court</h1>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Near Kaapi Kutira<br>
                        <i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;300<br>
                        <i class="fas fa-plus"> </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drinking Water, Benches, Kaapi Kutira
                    </div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><a href="sambhramslot.html"><i class="fas fa-tag mr-2"></i>Availibility</a></li>

                        <li class="tag__item play red">
                            <a href="sambhram.html"><i class="fas fa-play mr-2"></i>Book</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="VolleyBall.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title green">VolleyBall Court</h1>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Near Kaapi Kutira<br>
                        <i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;150<br>
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drinking Water, Benches, Kaapi Kutira
                    </div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><a href="shambhavislot.html"><i class="fas fa-tag mr-2"></i>Availibility</a></li>

                        <li class="tag__item play green">
                            <a href="shambhavi.html"><i class="fas fa-play mr-2"></i>Book</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark yellow">
                <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="sowparnika-hall.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title yellow">ISE Seminar Hall</h1>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3rd Floor, BSN Block<br>
                        <i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;100<br>
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC, Wi-FI, LAN, Sound Systems and Projector Screen
                    </div>
                    <ul class="postcard__tagbox">
                        <!--<li class="tag__item"><a href="sowparnikaslot.php"><i class="fas fa-tag mr-2"></i>Availibility</a></li>-->

                       <li class="tag__item play yellow">
                            <a href="sowparnika.php"><i class="fas fa-play mr-2"></i>Book</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark purple">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="Seminar_hall.jpeg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title purple">CSE Seminar Hall</h1>

                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd Floor, BSN Block<br>
                        <i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;100<br>
                        <i class="fas fa-plus"> </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC, Wi-FI, LAN, Sound Systems, and Projector Screen
                    </div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><a href="phalgunislot.html"><i class="fas fa-tag mr-2"></i>Availibility</a></li>

                        <li class="tag__item play purple">
                            <a href="phalguni.html"><i class="fas fa-play mr-2"></i>Book</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>



    
  </div>
  <?php
if(!empty($_POST["send"])) {
	$email = $_POST["email"];
	$content = $_POST["content"];
	$toEmail = "yashikarekha9@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
?>


  </body>
</html>
