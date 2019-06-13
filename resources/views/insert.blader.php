<!DOCTYPE html>
<html lang="en">
<head>
<style>
        <?php include 'main.css' ?>
        <?php include 'util.css' ?>
</style>        
	<title>Contact V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="flighttable.php" method="get">
				<span class="contact100-form-title">
					Flight information
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Flight No. is required">
					<span class="label-input100">Flight No.</span>
					<input class="input100" type="text" name="f_no" >
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Date</span>
					<input class="input100" type="text" name="c_da" placeholder="DD-Month-YYYY">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Origin</span>
					<input class="input100" type="text" name="org" >
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Destination</span>
					<input class="input100" type="text" name="des" >
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Status</span>
					<input class="input100" type="text" name="sta" >
                </div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Passenger</span>
					<input class="input100" type="integer" name="pas" >
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Crew</span>
					<input class="input100" type="integer" name="crew" >
                </div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Incident Site</span>
					<input class="input100" type="text" name="i_s" >
                </div>
                
                <div class="wrap-input100">
					<span class="label-input100">Summary</span>
					<input class="input100" type="text" name="summary" >
				</div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Fatalities</span>
					<input class="input100" type="integer" name="fat" >
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Survivor</span>
					<input class="input100" type="integer" name="sur" >
                </div>

                <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="sub">
							Add
						</button>
					</div>
				</div>

            </form>



            <form class="contact100-form validate-form" action="airlines.php" method="get">
                <span class="contact100-form-title">
                <br/><br/>
					Airlines information
                </span>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Country</span>
					<input class="input100" type="text" name="cou" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">IATA</span>
					<input class="input100" type="text" name="iata" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">ICAO</span>
					<input class="input100" type="text" name="icao" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Callsign</span>
					<input class="input100" type="text" name="cl" >
                </div>

                <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="sub">
							Add
						</button>
					</div>
				</div>

            </form>


            <form class="contact100-form validate-form" action="airport.php" method="get">

                <span class="contact100-form-title">
                    <br/><br/>
					Origin Airport information
                </span>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Location</span>
					<input class="input100" type="text" name="loc" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">IATA code</span>
					<input class="input100" type="text" name="iata" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">ICAO</span>
					<input class="input100" type="text" name="icao" >
                </div>

                <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="sub">
							Add
						</button>
					</div>
				</div>

            </form>


            <form class="contact100-form validate-form" action="airport.php" method="get">

                <span class="contact100-form-title">
                    <br/><br/>
					Destination Airport information
                </span>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Location</span>
					<input class="input100" type="text" name="loc" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">IATA code</span>
					<input class="input100" type="text" name="iata" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">ICAO</span>
					<input class="input100" type="text" name="icao" >
                </div>

                <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="sub">
							Add
						</button>
					</div>
				</div>

            </form>


            <form class="contact100-form validate-form" action="aircraft.php" method="get">

                <span class="contact100-form-title">
                    <br/><br/>
					Type of Aircraft involved
                </span>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Type</span>
					<input class="input100" type="text" name="typ" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Manufacturer</span>
					<input class="input100" type="text" name="man" >
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">National Origin</span>
					<input class="input100" type="text" name="no" >
                </div>

                <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="sub">
							Add
						</button>
					</div>
				</div>

            </form>



			
		</div>

		<span class="contact100-more">
				Call us on +001 345 6178
		</span>
	</div>

  



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
