<!DOCTYPE html>
<html lang="en">

<head>
<style>
        <?php include 'homepage.min.css' ?>
        <?php include 'homepage.css' ?>
        input.MyButton {
           
width: 300px;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
-moz-box-shadow:: 6px 6px 5px #999;
-webkit-box-shadow:: 6px 6px 5px #999;
box-shadow:: 6px 6px 5px #999;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}

    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Air Crash Investigation</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<!-- Header -->
<header class="masthead" style="background-image: url(https://aviakatastrofa.ru/wp-content/uploads/2018/07/aircrash-investigation-cover-1140x570.jpg); "> 
    <div class="container" >
      <div class="intro-text" >
        <div class="intro-lead-in"  ></div>
        <div class="intro-heading text-uppercase" > <br/> </div>
        <form>
<input class="MyButton" type="button" value="Show Data" onclick="window.location.href='showoptions.blader.php'" />
</form>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">What would you like to do?</h2>
          <h3 class="section-subheading text-muted">You can add, update or delete data.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <input class="MyButton" type="button" value="Add data" onclick="window.location.href='insert.blader.php'" />
          <p class="text-muted">Add air crash incidents information to be further used in the investigation.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <input class="MyButton" type="button" value="Delete Data" onclick="window.location.href='delete.blader.php'" />
          <p class="text-muted">You can delete flight information for further accurate investigation</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <input class="MyButton" type="button" value="Update data" onclick="window.location.href='updateoption.blader.php'" />
          <p class="text-muted">You can update flight data for further investigation</p>
        </div>
      </div>
    </div>
  </section>