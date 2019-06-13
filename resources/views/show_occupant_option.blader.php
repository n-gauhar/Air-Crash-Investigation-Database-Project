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


  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Occupant Data<br/></h2>
          <h2 class="section-heading text-uppercase">What would you like to see?<br/></h2>
          <br/>
          <input class="MyButton" type="button" value="All data" onclick="window.location.href='show_occupant_single_table.blader.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Criteria base data" onclick="window.location.href='crashonly.blader.php'" />
        </div>
      </div>
      
    
    </div>
  </section>