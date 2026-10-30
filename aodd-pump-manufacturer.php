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
    <title>Exports | Globe Star Engineers (India) Pvt. Ltd.</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<link rel="icon" href="<?php echo SITE_PATH; ?>assets/images/favicon-icon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_PATH; ?>assets/images/favicon-icon.png">
	<?php $path = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
	<link rel="canonical" href="<?php echo $path; ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LLK0D2BP1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-0LLK0D2BP1');
</script>
</head>

<body>
	<?php include('Templates/header.php'); ?>

    <div class="inner-banner" style="background-image:url(assets/images/aodd-pump-innerbg.png); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="cm-title">AODD Pump Manufacturer</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item"><a href="blog.php" title="Blog">Blog</a></li>
                        <li class="breadcrumb-item active">AODD Pump Manufacturer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-single-content">
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="assets/images/aodd-pump.png" alt="AODD Pump">
                            </figure>
                        </div>
                        <div class="service-entry">
                            <div class="service-solutions-box">
                                <h2 class="text-anime-style-3">AODD Pump Manufacturer</h2>
                                <p>Established in 2002, Globe Star Engineers (India) Pvt. Ltd. is one of the leading engineering technology providers in India and other countries. We are an ISO 9001-2015 certified company recognized for designing and manufacturing high-quality, reliable pumping solutions.</p>

                                <p>Headquartered in Gujarat, India, the Company offers a range of Industrial Pumps, Mechanical Seals, Pump Spares. Mr. Dhiraj Siddhapura started the Company by leveraging his extensive technical knowledge in this industry. The Company has a state-of-the-art manufacturing facility and testing units that are equipped with advanced machinery.</p>
                                
                                <p>We specialize in products for highly corrosive and demanding environments, including air-operated double diaphragm pumps, mechanically sealed centrifugal pumps, sewage pumps, dewatering pumps, chemical process pumps, pressure booster systems, and firefighting systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-single-sidebar">
                        <div class="page-catagery-list">
                            <h3>Related Blogs</h3>
                            <ul>
                                <li><a href="aodd-pump-manufacturer.php" title="AODD Pump Manufacturer">AODD Pump Manufacturer</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-cta-box">
                            <div class="sidebar-cta-form">
                                <h3>Send Us An Inquiry</h3>
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
                                
                                        <!-- Google reCAPTCHA -->
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php include('Templates/footer.php'); ?>