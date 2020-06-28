<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Tutorial Sample Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Call Bootstrap Style-->
  <link rel="stylesheet" href="/_inc/css/bootstrap.min.css">

  <!-- Call Style.css -->
  <link rel="stylesheet" href="/_inc/css/style.min.css">

</head>
<body>

<header></header>


<?php include '_inc/templates/nav.php';?>

<section>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm text-center">
      One of three columns
    </div>
    <div class="col-sm text-center">
      One of three columns
    </div>
    <div class="col-sm text-center">
      One of three columns
    </div>
  </div>
</div>
</section>

<!-- Call Google JQuery !-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Call Bootstrap Javascript -->
<script src="/_bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>