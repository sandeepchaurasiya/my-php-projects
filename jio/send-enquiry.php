<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Send Enquiry | Jio 4g Tower Services</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
		 <?php include 'header.php';?>

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs">
            <div class="rs-breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">Send Enquiry</h1>
                        <nav>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li><span>Send Enquiry</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><br /><br />
        <!-- Breadcrumbs End -->
		<section>
			<div class="container">
				<div class="row">
					<p class="hosting-desc text-justify">
					Do you want Reliance Jio 4G Tower installation on your site and want to earn Handsome Monthly Income? Fill the form below to apply for Reliance Jio 4G Tower installation and you will receive a call from our one of the executive and he/she will provide you complete details/information.
					</p>
				</div>
			</div>	
		</section><br /><br />
        <!-- Registration Form Section Start -->
        <section id="rs-client-service" class="rs-client-service section-bg wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <!-- Registration Form Section Start -->
        <div id="rs-registration" class="rs-registration sec-spacer">
            <div class="container">
               
                <div class="register-width">
                     <form class="register-form" id="register-form" method="post" action="">
						
						<label>Full Name*</label> <label id="name-error" class="error" for="name"></label>
						<input class="custom-placeholder"  type="text" id="name" name="name" >
						
						<label>Mobile No*</label> <label id="mobile-error" class="error" for="mobile"></label>
						<input class="custom-placeholder" maxlength="12" type="text" id="mobile" name="mobile" >
					
                        <label>Email Id*</label> <label id="email-error" class="error" for="email"></label>
                        <input class="custom-placeholder" type="email" id="email" name="email" >

						
                        <label>District*</label> <label id="district-error" class="error" for="district"></label>
                        <input class="custom-placeholder" type="text" id="district" name="district" >
						
					
						<label>State*</label> <label id="state-error" class="error" for="state"></label>
                        <input class="custom-placeholder" type="text" id="state" name="state" >
						
						
						<label>Pincode*</label> <label id="pincode-error" class="error" for="pincode"></label>
                        <input class="custom-placeholder" maxlength="6" type="text" id="pincode" name="pincode" >
						
						
						 <div class="submit-btn">
                         <input type="submit" class="btn-send" value="Submit" id="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>                     
        </div>
        <!-- Registration Section End -->
                    </div>
                    <div class="col-lg-6 col-md-12">
					<div class="container">

  
						<div class="rs-registration sec-spacer">
							<table class="table table-bordered">
								<thead>
								  <tr class="info">
									<th>RENT</th>
									<th>SECURITY</th>
									<th>PROCESS FEE</th>
									<th>AGREEMENT</th>
									<th>AGREEMENT PERIOD</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>15,000 - 25,000	</td>
									<td>15 Lakh - 25 Lakh</td>
									<td>14,500</td>
									<td>52,500</td>
									<td>15 years</td>
								  </tr>      
								</tbody>
							</table>
						  <h3>Require Document</h3>
						  <p style="font-size: 18px;"><b>Note </b>:- Please submit complete installation address</p>
						  <ul>
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Self attested copy of Voter ID </li><br />
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Self attested copy of PAN card</li><br />
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Self attested passport size photograph (two)</li><br />
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Copy of property related documents</li><br />
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Two references from your locality (having good goodwill in the &emsp; &emsp; &nbsp;&emsp; society) with full details including contact numbers</li><br />
							<li class="fa fa-angle-double-right" style="font-size: 18px;">&emsp;Copy of bank statement (last six months)</li><br />
						  </ul>
						  <br />
						    <p style="font-size: 18px;"><b>Note </b>:- Please scan all docoments and send at <b>Email:- info@myjiotower.com</b></p>
						</div>
                    </div>
                </div>
				</div>
            </div>
        </section>
        <!-- Registration Section End -->
<script type="text/javascript">

    $(document).ready(function () {

        $('#register-form').validate({
                rules: {
					name : "required",
					mobile : {
							required : true,
							number : true,
							minlength: 10,
						},
					email : {
						required :true,
						email : true,
					},	
					district : "required",
					state : "required",
					pincode : {
						required : true,
						number : true,
						minlength: 6,
					} 
                },
                messages: {
					name : "Please Enter Your Name.",
					mobile : {
						required : "Please Enter Mobile Number.",
						number : "Please Enter Valid Number.",
						minlength: "Please Enter Valid Number.",
					},
					email : {
						required : "Please Enter Your E-mail. ",
						email : "Please Enter Valid E-mail. "
					},
					district : "Please Enter Your District Name. ",
					state : "Please Enter Your State Name.",
					pincode : {
						required : "Please Enter Your Pin Code Number.",
						number : "Please Enter Valid Pin Code Number.",
						minlength : "Please Enter Valid Pin Code Number.",
					},	
				},					
                submitHandler: function (form) {
                    $.ajax({
                        url: "sms_api.php",
                        type: "POST",
                        data: $(form).serialize(),
                        success: function (data) {
							$(form)[0].reset();
                          $('#result').html(data);
						
                       
                        }

                    });

                }
        
		});
    });
</script>
       <?php include 'footer.php';?>