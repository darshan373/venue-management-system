<?php
session_start();
if(empty($_SESSION['username']))
{
  header('Location:Homepage.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
  body {
  margin: 0;
  padding: 0;
  animation: pulse 5s infinite;
}

.container {
  position: relative;
  width: 50%;
  margin: 280px auto;
  padding: 20px 40px;
  border-radius: 4px;
  box-sizing: border-box;
  background: #fff;
  box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
}

.Loading {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 10px;
  background: #f1f1f1;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
  border-radius: 4px;
  overflow: hidden;
}

.Loading:after {
  content: '';
  position: absolute;
  left: 0;
  width: 0;
  height: 100%;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .2);
  animation: load 5s infinite;
}

@keyframes load {
  0% {
    width: 0;
    background: #a28089;
  }

  25% {
    width: 40%;
    background: #a0d2eb;
  }

  50% {
    width: 90%;

      background: #494d5f;
  }

  75% {
    width: 100%;
    background: #d0bdf4;
  }

  100% {
    width: 100%;
      background: #ffa8b6;
  }
}

@keyframes pulse {
  0% {
    background: #a28089;
  }

  25% {
    background: #a0d2eb;
  }

  50% {
    background: #494d5f;
  }

  75% {
    background: #d0bdf4;
  }

  100% {
      background: #ffa8b6;
  }
}
.itext
{
  font-size:40px;
  color:white;
  text-align: center;
}
  </style>
</head>
<body>

  <?php
  $con =mysqli_connect ("localhost","root","","emsprojectdata");
  if (!$con)
  {
  die("Could not connect: " . mysql_error());
  }
  else{
    echo"";
  }
  session_destroy();
  echo '<meta http-equiv="refresh" content="2;url="Homepage.php">';
/*  echo '<h1 class="itext">Logging out...</span>';*/
  echo '<div class="container">
    <div class="Loading"></div>
  </div><br>';

   ?>

   </body>
</html>
