<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admission Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="fp.php" method="POST">
				<span class="contact100-form-title">
						<center>  <h1> Saraswati Education Society's
              <br>New Blossoms English Medium School</h1> </center>
              <center> 
              	
              	<h2>Vinchur,Tal-Niphad,Dist-Nashik-422305</h2></center>
              <center>
              	<br>
              	<h2> Admission Form</h2></center>
              <center>2021-2022</center>
              <h3>Date:</h3> <input type="date" id="start" name="trip-start">	
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100"> Full Name of the Student's</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name " required>
				</div>

				<div class="wrap-input100" >
					<span class="label-input100">Gender</span>
					<div class="input100">
					<input type="radio" value="Male" name="gender"> Male 
					<input type="radio" value="Female" name="gender" required> Female 
					<input type="radio" value="Other" name="gender" required> Other
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1"
				data-validate="Please Type Your Mother's Name">
					<span class="label-input100">Student's Mother's Name</span>
					<input class="input100" type="text" name="mother" placeholder="Enter Your Mother's Name">
				</div>

				<div class="wrap-input100 validate-input bg1"data-validate="Please Enter Your Aadhar card Number">
					<span class="label-input100">Student's Aadhar card Number</span>
					<input class="input100" type="Number" name="aadhar" placeholder="Enter Your Aadhar card Number">
				</div>

				<div class="wrap-input100 validate-input bg1"data-validate="Please Enter Your Date of Birth">
					<span class="label-input100">Student's Date of Birth</span>
					<input class="input100" type="date" name="dob" placeholder="Enter Your Aadhar card Number">
				</div>

				<div class="wrap-input100 validate-input bg1"data-validate="Please Enter Your Place of Birth">
					<span class="label-input100">Student's Place of Birth</span>
					<input class="input100" type="text" name="place" placeholder="Enter Your Place of Birth(eg. Vinchur,Tal-Niphad,Dist-Nashik)">
				</div>


				<div class="wrap-input100 validate-input bg1"data-validate="Please Enter Mother Tongue">
					<span class="label-input100"> Mother Tongue</span>
					<input class="input100" type="text" name="toungue" placeholder="Enter  Mother Tongue ">
				</div>


				<div class="wrap-input100 validate-input bg1"data-validate="Please Enter Caste and Sub caste">
					<span class="label-input100">Caste and Sub caste</span>
					<input class="input100" type="text" name="cast" placeholder="Enter Caste and Sub caste">
				</div>


				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Address">
					<span class="label-input100"> Residential Address </span>
					<textarea class="input100" name="address" placeholder="Your Address Here..."></textarea>
				</div>


				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter Number">
					<span class="label-input100">Father's Number</span>
					<input class="input100" type="phone" size="10" name="number" placeholder="Enter Father's Number">
				</div>


						<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Mother's Number</span>
					<input class="input100" type="Phone" size="10" name="mothernum" placeholder="Enter Mother's Number">
				</div>


					<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Guardian's Number</span>
					<input class="input100" type="phone" size="10" name="guardian" placeholder="Enter Guardian's Number">
				</div>
						<div class="wrap-input100 validate-input bg1" data-validate="Please Select ">
					<span class="label-input100">Admission Sought For Class</span>
					<input class="input100" type="text" name="sought" placeholder="">
				</div>

						<div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
					<span class="label-input100"> Last School Name attended (if any)</span>
					<textarea class="input100" name="school" placeholder="Enter here"></textarea>
				</div>

		

			<!-- 	<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div> -->

				<input type="submit" value="Submit" name="submit">
</form>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'localhost');
</script>

</body>
</html>
