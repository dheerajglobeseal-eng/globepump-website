<?php
error_reporting(0);
include('Templates/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <title>Contact Us | Globe Star Engineers (India) Pvt. Ltd.</title>
    <meta name="description" content="Globe Star Engineers, a trusted industrial pump manufacturer in Ahmedabad. We provide durable and efficient pumping solutions for various applications." />
    <meta name="keywords" content="Contact Us | Globe Star Engineers (India) Pvt. Ltd." />
	<link rel="icon" href="<?php echo SITE_PATH; ?>assets/images/favicon-icon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_PATH; ?>assets/images/favicon-icon.png">
	<?php $path = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
	<link rel="canonical" href="<?php echo $path; ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<?php include('Templates/header.php'); ?>

   <div class="inner-banner" style="background-image:url(assets/images/about-innerbg.png); background-position: center left; background-size: cover;">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="cm-title">Contact Us</h1>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                  <li class="breadcrumb-item active">Contact Us</li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="page-contact-us">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="contact-information">
                  <div class="section-title">
                     <h3>contact us</h3>
                     <h2 class="text-anime-style-3">Get in Touch <span>With Us</span></h2>
                  </div>
                  <div class="contact-info-box">
                     <div class="contact-info-item">
                        <div class="icon-box">
                           <img src="assets/images/icon-location.svg" alt="Address">
                        </div>
                        <div class="contact-info-content">
                           <h3>Head Office :-</h3>
                           <p>615, 6th Floor, Girivar Glean Mall, Odhav Road, <br> Odhav, Ahmedabad - 382415</p>
                        </div>
                     </div>
                     <div class="contact-info-item">
                        <div class="icon-box">
                           <img src="assets/images/icon-location.svg" alt="Address">
                        </div>
                        <div class="contact-info-content">
                           <h3>Plant Address :-</h3>
                           <p>Plot No- A-77, Swadheen Industrial Park, Kothiya Ahmedabad Indore Highway, Ta. Daskroi, Distt. Ahmedabad - 382433</p>
                        </div>
                     </div>
                     <div class="contact-info-item">
                        <div class="icon-box">
                           <img src="assets/images/icon-mail.svg" alt="Email">
                        </div>
                        <div class="contact-info-content">
                           <h3>Email Us On :-</h3>
                           <p><a href="mailto:inquiry@globeseal.com">inquiry@globeseal.com</a></p>
                           <p><a href="mailto:info@globeseal.com">info@globeseal.com</a></p>
                           <p><a href="mailto:purchase@globeseal.com">purchase@globeseal.com</a></p>
                        </div>
                     </div>
                     <div class="contact-info-item">
                        <div class="icon-box">
                           <img src="assets/images/icon-phone.svg" alt="Call">
                        </div>
                        <div class="contact-info-content">
                           <h3>Call Us On</h3>
                           <p><a href="tel:917922970453">Landline & Fax : +91 79229 70453</a></p>
                           <p><a href="tel:919574004224">Purchase : +91 95740 04224</a></p>
                           <p><a href="tel:919537419590">inquiry (Mobile) : +91 95374 19590</a></p>
                           <p><a href="tel:8069641174">Toll Free No. : 8069641174</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="contact-us-form">
                  <div class="section-title">
                     <h2 class="text-anime-style-2">Drop Us A <span>Message</span></h2>
                  </div>
                  <div class="contact-form">
                     <form action="enquiry-mail.php" method="post" class="form-info">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" required name="customername" id="customername" placeholder="Full Name">
                              </div>
                           </div>
                     
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" required name="phone" id="phone" placeholder="Phone Number" maxlength="10" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number">
                              </div>
                           </div>
                     
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email">
                              </div>
                           </div>
                     
                           <div class="col-md-12">
                              <div class="form-group">
                                 <textarea class="form-control" required name="Requirement" id="Requirement" rows="3" cols="10" placeholder="Requirement"></textarea>
                              </div>
                           </div>
                           
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="g-recaptcha recaptcha-size" data-sitekey="6LcTRwksAAAAAJNSFCpcdYiyhuAG8yJ7uodIyDZx"></div>
                              </div>
                           </div>
                     
                           <div class="col-md-12">
                              <div class="form-group mb-0 submit-btn">
                                 <input type="submit" value="Submit" name="Submit" class="cm-btn" />
                              </div>
                           </div>
                        </div>
                     </form>
                     <script src="https://www.google.com/recaptcha/api.js"></script>
                  </div>
               </div>
            </div> 
         </div>
      </div>
   </div>

   <div class="google-map">
      <div class="container-flude">
         <div class="row">
            <div class="col-lg-12">
               <div class="google-map-iframe">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.107963443901!2d72.66052239999999!3d23.0198078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87a8607ad131%3A0x902d654fe9618f8c!2sGlobe%20Star%20Engineers%20-%20Diaphragm%20pumps!5e0!3m2!1sen!2sin!4v1759304836573!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>

	<?php include('Templates/footer.php'); ?>