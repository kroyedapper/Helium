<?php require("includes/header.php"); ?>
  <?php require("includes/helium_libs.php"); 
$notification = $bon->ContactUs();
//echo $notification;exit();
?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/heliumwriters_banner.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          </div>
        </div>
      </div>
    </section>

      <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about-1.jpg);">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-md-5">
	          <div class="heading-section">
	            <h2 class="mb-4">ABOUT HELIUM WRITERS</h2>

	            <p>Is your business in need of quality content creation that will grab your reader’s attention and make them take notice of your business? 
				Do you need content that is grammatically correct and guaranteed 100% original? </p>
	            <p>Helium Writers is your number one source for the content you need, the service you want and competitive prices you can afford. </p>
				<p><strong>Mission Statement</strong></p>
				<p>Our mission is to be an unrivalled industry leader by providing quality contents to our customers.</p>
				<p><strong>Our Writing Guarantee</strong></p>
				<p>We believe in providing value to our dearly esteemed customers. 
				Therefore, we guarantee you that your contents would be delivered in intriguing, informational and free from grammatical errors.
				We also offer an originality guarantee that is backed up by a Copy scape screenshot provided with all deliveries.</p>
	          </div>

	         
					</div>
				</div>
			</div>
		</section>
		
		<?php //include("includes/about-counter.php"); ?>

	
<?php //include("includes/testimonial.php") ?>


    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
					<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
					<?php echo $notification; ?>
    				<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
											<?php echo $notification; ?>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary">
														<input type="hidden" name="contact_form">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
    			</div>
    		</div>
    	</div>
    </section>	
	
	
<?php include("includes/footer.php"); ?>


