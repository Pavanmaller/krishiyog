<?php
session_start();

 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Krishiyog Naturals &mdash;Seed to wellness</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">




  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
<script type="text/javascript">
function validate() {
	var	ifsc = $("#ifsc").val();
	var ifscChecker = /^[A-Z|a-z]{4}[0][\d]{6}$/;
	var accountNumber = $("#accountNumber").val();
	var accountNumberChecker = /^\d{9,18}$/;
	if (!ifscChecker.test(ifsc)) {
		$("#errorifsc").html("Invalid IFSC code");
		document.getElementById('errorifsc').style.color="red";

	}else {
		$("#errorifsc").html("");

	}
	if (!accountNumberChecker.test(accountNumber)) {
		$("#erroraccountNumber").html("Invalid Account Number");
		document.getElementById('erroraccountNumber').style.color="red";

	}else {
		$("#erroraccountNumber").html("");

	}
    if ( document.buyerForm.gst.value.length!=15) {
           document.buyerForm.gst.focus() ;
					 document.getElementById('errorsgst').innerHTML="Enter gst with 15 digits";
					 document.getElementById('errorsgst').style.color="red";
        return false;
    }

		if (document.buyerForm.tan.value.length!=10) {
           document.buyerForm.tan.focus() ;
					 document.getElementById('errorstan').innerHTML="Enter tan with 10 digits";
					 document.getElementById('errorstan').style.color="red";
        return false;
    }
		if (document.buyerForm.pan.value.length!=16) {
           document.buyerForm.pan.focus() ;
					 document.getElementById('errorspan').innerHTML="Enter pan with 16 digits";
					 document.getElementById('errorspan').style.color="red";
        return false;
    }
		return true;
}
</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123909367-1');
</script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo"><a href="index.html"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px"></img></a></div>
					</div>
					<div class="col-xs-8 text-center menu-1">
						<ul>
						<!--	<li><a href="index.html"><b>Home</a></b></li> -->
							<span class="icon">
								<li><a class="active" href="index.html"><i class="icon-home"></i></a></li>
							</span>
							<li><a href="index.html#about?"><b>About</a></b></li>
							<li><a href="index.html#natural farming?"><b>Natural Farming</a></b></li>
							<li><a href="resource.html"><b>RESOURCES</a></b></li>
							<li><a href="contact.php"><b>Contact us</a></b></li>


						</ul>
					</div>
					<div class="col-xs-2 text-right hidden-xs menu-2">
						<ul>
							<li><a href="signup2.php"><b>Register<b></a></li>
						</ul>
					</div>

				</div>

			</div>
		</nav>

<div style="padding-top:100px;"></div>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h3>Buyer Form</h3>
					<hr>
						<?php
						$_SESSION['category']="buyerdb";
						$_SESSION['fname']="Rohan";
						$_SESSION['lname']="Rohan";

							if ($_SESSION['category'] == 'buyerdb') {
								echo "<div class='row'>
												<div class='col-md-4'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-4'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
											<div class='row'>
															<div class='col-md-4'>
																Address: ".$_SESSION['address']."
															</div>
															<div class='col-md-4'>
																Pincode: ".$_SESSION['pincode']."
															</div>
														</div>
								 ";
							}
							if ($_SESSION['category'] == 'sellerdb') {
								echo "<div class='row'>
												<div class='col-md-4'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-4'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
											<div class='row'>
															<div class='col-md-4'>
																Address: ".$_SESSION['address']."
															</div>
															<div class='col-md-4'>
																Pincode: ".$_SESSION['pincode']."
															</div>
														</div>
								 ";
							}
							if ($_SESSION['category'] == 'aggregator') {
								echo "<div class='row'>
												<div class='col-md-4'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-4'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>

								 ";
							}
							if ($_SESSION['category'] == 'medexpertdb') {
								echo "<div class='row'>
												<div class='col-md-4'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-4'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
											<div class='col-md-4'>
												Specialization: ".$_SESSION['specialization']."
											</div>
										</div>
								 ";
							}
							if ($_SESSION['category'] == 'communorg') {
								echo "<div class='row'>
												<div class='col-md-4'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-4'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>

								 ";
							}
						 ?>
						<hr>
					<form name="buyerForm" action="buyerEnqdb.php" method="post" onsubmit="return(validate())">
						<div class="row form-group">

					 <div class="row form-group">
							<div class="col-md-6">
							<select name="farming_type" required>
								<option selected disabled="disabled">Farming type</option>
 								<option value="Natural Farming">Natural Farming</option>
 						  	<option value="Group Organic Certified">Group Organic Certified</option>
 						    <option value="Organic PGS">Organic PGS</option>
 						    <option value="Organic(Self Certified)">Organic(Self Certified)</option>
								<option value="Organic(Not Certified)">Organic(Not Certified)</option>
								<option value="conventional">Conventional</option>

					    </select>
							</div>

						</div>
						<div class="row form-group">
              <div class="col-md-6">
                <input type="text" class="form-control" name="companyName" placeholder="Company or Organisation Name" value="" required>

              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Your Email address" value="" required>

              </div>
						</div>

						<hr>
						<div class="row form-group">
							<div class="col-md-4">
								<input type="text" id="bankName"  class="form-control" name="bankName" placeholder="Bank Name" value="" required>
							</div>
							<div class="col-md-4">
								<input type="text" id="ifsc"  class="form-control" name="ifsc" placeholder="IFSC Code" value="" required>
								<div id="errorifsc">

								</div>
							</div>
							<div class="col-md-4">
								<input type="text" id="accountNumber"  class="form-control" name="accountNumber" placeholder="Account Number" value="" required>
							</div>
							<div id="erroraccountNumber">

							</div>
						</div>
						<hr>
						<div class="row form-group">
							<div class="col-md-4">

								<input type="text" id="gst" name="gst" class="form-control" required  placeholder="Gst Number">
								<div id ="errorsgst">
								</div>
							</div>
						<div class="col-md-4">

							<input type="text" id="tan" name="tan" class="form-control" required placeholder="TAN Number">
							<div id ="errorstan">
							</div>
						</div>

						<div class="col-md-4">

							<input type="text" id="pan" name="pan" class="form-control" required placeholder="PAN Number">
							<div id ="errorspan">
							</div>
						</div>

					</div>

					</div>
				</div>
				<script type="text/javascript" src="js/script.js"></script>

					<p>
						<input type="button" value="Add Item" onClick="addRow('dataTable')" />
						<input type="button" value="Remove Item(s)" onClick="deleteRow('dataTable')"  />
						<p>(All acions apply only to entries with check marked check boxes only.)</p>
					</p>
								 <table id="dataTable" class="form" border="1">
										<tbody>
											<tr>
												<p>
							<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
							<td>
								<label>Item</label>
								<input type="text" required="required" name="BX_Item[]">
							 </td>
							 <td>
								<label for="BX_units">Units</label>
								<input type="text" required="required" class="small"  name="BX_units[]">
								 </td>
							 <td>
								<label for="BX_type">Measure</label>
								<select id="BX_type" name="BX_type[]" required="required">
									<option selected disabled="disabled">....</option>
									<option value="Grams">Grams</option>
									<option value="KG">KG</option>
									<option value="Quintals">Quintals</option>
									<option value="Box">Box</option>
									<option value="Litre">Litre</option>
									<option value="ml">ml</option>
									<option value="dozen">Dozen</option>
									<option value="others">others</option>
								</select>
							 </td>
							 <td>
								 <label for="">Duration</label>
								 <select name="BX_duration[]" required>
									 <option selected disabled="disabled" value="">....</option>
									 <option value="Per Day">Per Day</option>
									 <option value="Per Month">Per Week</option>
									 <option value="Per Month">Per Month</option>

								 </select>
							 </td>
								</p>
											</tr>
											</tbody>
									</table>
					<div class="clear"></div>
							</fieldset>

							<div class="form-group">
								<label for="">Delivery address</label>
								<input type="text" placeholder="Delivery Address" class="form-control" name="deliveryAddress" value="">
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10"
									class="form-control" placeholder="Tell us more about your products"></textarea>
								</div>
							</div>
							</div>


						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>
				</div>

			</div>

		</div>
	</div>




	<footer id="gtco-footer" class="gtco-brown" role="contentinfo" >
		<div class="gtco-container">
			<!--<div class="row row-pb-md">



				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Deelopers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>-->

			<div class="row copyright">
				<div class="col-md-12">
					<!--<p class="pull-left">



					</p> -->

					<p>
						<ul class="gtco-social-icons">
							<center>
							<li><a href="https://www.facebook.com/krishiyognatural/?hc_ref=ARSUcxlZqdJSeiRcJYY2UUZRD7gjadyyI2B-G5iwxXDBe8YJLtgksUXtKBdzvV5ON8w"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/krishiyog/"><i class="icon-instagram"></i></a></li>
								<small class="block">  Email : enquiry@krishiyog.com </small>
								<small class="block"> <a href="contact.php">Contact Us</a> </small>
								<a href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog"><img src="images1\google-play-badge.png" width="140px"></img></a>
							</center>
						</ul>
					</p>
					<small><p><center>Copyright &copy; 2018. &nbsp; Nisarga Krishiyog Ventures OPC Pvt Limited.&nbsp;&nbsp;All Rights Reserved  <br> &nbsp;&nbsp;   <a href="privacy.html">Privacy Policy</a> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.html">Terms of services</a>&nbsp;&nbsp;   |&nbsp;&nbsp;   <a href="refund.html">Refunds &amp; Returns&nbsp;&nbsp; </a></center></p></small>

				</div>
			</div>

		</div>

	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>



<script>



var app = angular.module('add-row', []);

  app.controller('MainCtrl', function($scope) {

  //$scope.dataType = ['type1', 'type2', 'type'];

 $scope.columns = [{colId: 'col1', name:'',quantity:'', dataType:[]}];
 $scope.dataType = [

{id: 1, dataTypeName: 'Grams'},
{id: 2,  dataTypeName: 'KG'},
{id: 3, dataTypeName: 'Quintals'},
{id: 4, dataTypeName: 'Box'},
{id: 5, dataTypeName: 'Litre'},
{id: 6, dataTypeName: 'ml'}
];



  $scope.addNewColumn = function() {
    var newItemNo = $scope.columns.length+1;
    $scope.columns.push({'colId':'col'+newItemNo});
  };


  $scope.removeColumn = function(index) {
    // remove the row specified in index
    $scope.columns.splice( index, 1);
    // if no rows left in the array create a blank array
    if ( $scope.columns.length() === 0 || $scope.columns.length() == null){
      alert('no rec');
      $scope.columns.push = [{"colId":"col1"}];
    }


  };



});
</script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->form-group
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>