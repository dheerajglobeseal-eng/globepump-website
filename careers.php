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
    <title>Career | Globe Star Engineers (India) Pvt. Ltd.</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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
                    <h1 class="cm-title">Career</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active">Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-team">
                        <div class="contact-team-box">
                            <span class="sm-title">
                                <i class="fa fa-user" aria-hidden="true"></i> HR
                            </span>
                            <h3 class="cm-title">Mr. Umang Barot</h3>
                            <ul class="features-list">
                                <li><i class="fa fa-phone call2" aria-hidden="true"></i>Call To :- +91 95374 16272</li>
                                <li><i class="fa fa-whatsapp call2" aria-hidden="true"></i>Whatsapp To :- +91 95374 16272</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>Please Post Your Resume :- hr@globeseal.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="contact-team">
                        <div class="contact-team-box">
                            <h3 class="cm-title">Current Opening</h3>
                            <h4>1. General Manager</h4>
                            <p><strong>Experience :-</strong> Having 7 To 10 Years Experience In Industrial Pump Line</p>

                            <h4>2. Purchase Executive</h4>
                            <p><strong>Experience :-</strong> 1 To 3 Years Experience In Mechanical Engineering Product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2">Career</h2>
                        </div>
                        <div class="contact-form">
                            <form action="career.php" method="post" name="careerForm" id="careerForm" enctype="multipart/form-data"
                                class="form-info">
                            
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact No." maxlength="15"
                                            required>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="position" id="position" placeholder="Post For Apply" required>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"
                                            required></textarea>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="" name="resume" id="resume" accept=".pdf,.doc,.docx" required>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group mb-0 submit-btn">
                                        <input type="submit" value="Submit" class="cm-btn" />
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