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
</head>

<body>
	<?php include('Templates/header.php'); ?>

    <div class="inner-banner" style="background-image:url(assets/images/about-innerbg.png); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="cm-title">Exports</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active">Exports</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/images/exports-map.png" alt="Exports">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2"><span>Exports</span></h2>
                            <p>Globe Star Engineers (India) Pvt. Ltd. stands as a testament to over two decades of dedicated engineering and manufacturing excellence, specializing in industrial pump solutions. As an ISO 9001-2015 certified company, we ensure that every pump leaving our advanced manufacturing unit, meets the highest quality standards. Our comprehensive range of industrial pumps is designed to cater to the diverse needs of demanding industries. This includes robust Mud Pumps, versatile Air Operated Double Diaphragm (AODD) Pumps, reliable Submersible Dewatering Pumps, and precision-engineered Chemical and Centrifugal Process Pumps, as well as efficient Sewage Submersible Pumps.</p>

                            <p>Our commitment extends beyond manufacturing. We have a proven track record of serving critical sectors, including Petrochemicals, Oil & Gas, Water & Wastewater, and Power, all of which are vital to the UAE's infrastructure. Our extensive export experience, particularly within the Middle East, demonstrates our ability to meet the unique requirements of the region. We are proud to have supplied our high-performance pumps to numerous prestigious clients, including leading Public Sector Undertakings (PSUs) and private sector giants such as ONGC, IOCL, ADANI, and RELIANCE.</p>

                            <p>Globe Star Engineers is dedicated to establishing strong partnerships within Dubai and the broader UAE. We aim to provide reliable, efficient, and durable industrial pump solutions that contribute to the success of our clients' operations. Our focus on quality, combined with our extensive experience, makes us a trusted partner for any industrial pumping needs.</p>

                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-images">
                        <div class="why-choose-img-box-1">
                            <div class="why-choose-img-1">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/why-choose-aodd-pump.png" alt="Aodd Pump">
                                </figure>
                            </div>
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/why-choose-vertical-multistage-inline-pump.png" alt="Vertical Multistage Inline Pump">
                                </figure>
                            </div>
                        </div>
                        <div class="why-choose-img-box-2">
                            <div class="why-choose-img-3">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/why-choose-chemical-process-pump.png" alt="Chemical Process Pump">
                                </figure>
                            </div>
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="assets/images/why-choose-sewage-pump.png" alt="Sewage Pump">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php include('Templates/footer.php'); ?>