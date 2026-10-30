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
    <title>global country | Globe Star Engineers (India) Pvt. Ltd.</title>
    <meta name="description" content="global country" />
    <meta name="keywords" content="global country" />
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

    <div class="inner-banner" style="background-image:url(assets/images/about-innerbg.png); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="cm-title">Global Country</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active">Global Country</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="cm-innerpage our-services-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-list-box">
                        <div class="service-item">
                            <a href="industrial-pump-uae.php">
                                <div class="icon-box image-anime">
                                    <img src="assets/images/uae-banner.png" alt="UAE">
                                </div>
                                <div class="service-body">
                                    <h3>UAE</h3>
                                </div>
                            </a>
                            <div class="service-footer">
                                <a href="industrial-pump-uae.php" class="service-btn">
                                    <img src="assets/images/arrow-dark.svg" alt="Arrow">
                                </a>
                            </div>
                        </div>
                        <div class="service-item">
                            <a href="industrial-pump-bangladesh.php">
                                <div class="icon-box image-anime">
                                    <img src="assets/images/bangladesh-banner.png" alt="Bangladesh">
                                </div>
                                <div class="service-body">
                                    <h3>Bangladesh</h3>
                                </div>
                            </a>
                            <div class="service-footer">
                                <a href="industrial-pump-bangladesh.php" class="service-btn">
                                    <img src="assets/images/arrow-dark.svg" alt="Arrow">
                                </a>
                            </div>
                        </div>
                        <div class="service-item">
                            <a href="https://www.globepump.com/industrial-pump-south-africa.php">
                                <div class="icon-box image-anime">
                                    <img src="assets/images/africa-banner.jpg" alt="South Africa">
                                </div>
                                <div class="service-body">
                                    <h3>South Africa</h3>
                                </div>
                            </a>
                            <div class="service-footer">
                                <a href="https://www.globepump.com/industrial-pump-south-africa.php" class="service-btn">
                                    <img src="assets/images/arrow-dark.svg" alt="Arrow">
                                </a>
                            </div>
                        </div>
                         <div class="service-item">
                            <a href="industrial-pump-india.php">
                                <div class="icon-box image-anime">
                                    <img src="assets/images/india-banner.png" alt="india">
                                </div>
                                <div class="service-body">
                                    <h3>India</h3>
                                </div>
                            </a>
                            <div class="service-footer">
                                <a href="industrial-pump-india.php" class="service-btn">
                                    <img src="assets/images/arrow-dark.svg" alt="Arrow">
                                </a>
                            </div>
                        </div>                             
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php include('Templates/footer.php'); ?>