<!DOCTYPE html>
<html lang="zxx">
    

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Contact Us | Jio 4g Tower Services</title>
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
                        <h1 class="page-title">Contact Us</h1>
                        <nav>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li><span>Contact Us</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Information Start -->
        <section id="rs-contact-info" class="rs-contact-info">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Contact Information</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-grid  wow animated fadeInLeft">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="text-here">
                                <h3 class="title"><a href="#">office address</a></h3>
                                <p class="some-text">
                                    Office no 3 & 4, Basement Level Floor, Grace Plaza, BKC Complex Bandra Mumbai - 400102
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-grid">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone"></i>
                            </div>
                            <div class="text-here">
                                <h3 class="title"><a href="#">PHONE SUPPORT</a></h3>
                                <p class="some-text">
                                  <ul class="top-menu">
                                    <li>Phone No.:- <a href="tel:+6207222323">(+620)722-2323</a></li>
                                   
								  </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-grid wow animated fadeInRight">
                            <div class="contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="text-here">
                                <h3 class="title"><a href="#">Email ID</a></h3>
                                <p class="some-text">
								<ul class="top-menu">
								 <li> Email ID :- <a href="mailto:4gtoweragency@gmail.com">4gtoweragency@gmail.com</a></li>
								 <li> Website :- <a href="http://www.jio4gtowerservices.com">www.jio4gtowerservices.com</a></li>
								 </ul>
                                  
									
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Information End -->

        <!-- Map Section Start -->
        <!--<section id="rs-map" class="rs-map">
            <div id="googleMap">
			
			</div>
        </section>-->
        <!-- Map Section End -->

        <!-- Contact Comment Section Start -->
        <div id="rs-contact-comment" class="rs-contact-comment sec-spacer">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Leave Comment</h2>
                </div>
                <div id="form-messages"></div>
                <form id="contact-form" method="post" action="">
                    <fieldset>
                        <div class="row">                                      
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Name*</label>  <label id="name-error" class="error" for="name"></label>
                                    <input name="name" id="name" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email*</label>  <label id="email-error" class="error" for="email"></label>
                                    <input name="email" id="email" class="form-control" type="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Number*</label> <label id="number-error" class="error" for="number"></label>
                                    <input name="number" id="number" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Your Subject*</label> <label id="subject-error" class="error" for="subject"></label>
                                    <input name="subject" id="subject" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-12 col-sm-12">    
                                <div class="form-group">
                                    <label>Message*</label> <label id="message-error" class="error" for="message"></label>
                                    <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">         
                                <input class="btn-send" type="submit" value="Submit Now">
                            </div>
                        </div>    
                    </fieldset>
                </form>
            </div>                     
        </div>
        <!-- Contact Comment Section End -->
<script type="text/javascript">

    $(document).ready(function () {
        $('#contact-form').validate({
                rules: {
					name : "required",
					email : {
						required :true,
						email : true,
					},	
					number : {
							required : true,
							number : true,
							minlength: 10,
						},
					subject : "required",
					message : "required",
                },
                messages: {
					name : "Please Enter Your Name.",
					email : {
						required : "Please Enter Your E-mail. ",
						email : "Please Enter Valid E-mail. "
					},
					number : {
						required : "Please Enter Mobile Number.",
						number : "Please Enter Valid Number.",
						minlength: "Please Enter Valid Number.",
					},
					
					subject : "Please Enter Your District Name. ",
					message : "Please Enter Your State Name.",	
				},					
                submitHandler: function (form) {
                    $.ajax({
                        url: "email_api.php",
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