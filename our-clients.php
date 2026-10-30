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
    <title>Globe Star Engineers (India) Pvt. Ltd.</title>
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
                    <h1 class="cm-title">Our Clients</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item"><a href="about-us.php" title="About Us">About Us</a></li>
                        <li class="breadcrumb-item active">Our Clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-detail cm-innerpage">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-info">
                        <ul class="nav justify-content-center">
                            <li><a class="active" id="government-tab" data-toggle="tab" href="#government">Government Sector</a></li>
                            <li><a class="" id="private-tab" data-toggle="tab" href="#private">Private Sector</a></li>
                            <li><a class="" id="oem-tab" data-toggle="tab" href="#oem">OEM Clients</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="government">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 d-flex">
                                    <div class="w-100 d-flex flex-column tab-box">
                                        <div class="row">
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/ministry-of-railway.png" alt="Ministry Of Railway">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/dae.png" alt="DAE">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/hal.png" alt="HAL">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/bhel.png" alt="Bhel">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/ongc.png" alt="ONGC">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/indian-oil.png" alt="Indian Oil">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/bharat-patrolium.png" alt="Bharat Patrolium">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/gsecl.png" alt="GSECL">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/hp.png" alt="HP">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/hoc.png" alt="HOC">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/gujrat.png" alt="Gujrat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="private">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 d-flex">
                                    <div class="w-100 d-flex flex-column tab-box">                              
                                        <div class="row">
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/arvind.png" alt="Arvind">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/coromandl.png" alt="Coromandl">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/dorfketal.png" alt="DorfKetal">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/zydus.png" alt="Zydus">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/thermax.png" alt="Thermax">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/mecon.png" alt="Mecon">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/torrent.png" alt="Torrent">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/intas.png" alt="Intas">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/gps.png" alt="GPS">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/l-and-t.png" alt="L & T">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/airolam.png" alt="Airolam">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/sirpur.png" alt="Sirpur">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/prism.png" alt="Prism">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/giacl.png" alt="GIACL">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/nayara.png" alt="Nayara">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/manmohan.png" alt="Manmohan">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/nirma.png" alt="Nirma">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/gfl.png" alt="GFL">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/meghmani-group.png" alt="Meghmani Group">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/neptune.png" alt="Neptune">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/samrat.png" alt="Samrat">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/ratnamani.png" alt="Ratnamani">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/chiripal.png" alt="Chiripal">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/lupin.png" alt="Lupin">
                                                </div>
                                            </div>


                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/deon.png" alt="DEON">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/adgums.png" alt="Adgums">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/avdhoot.png" alt="Avdhoot">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/gopal.png" alt="Gopal">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/rushil.png" alt="Rushil">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/specialicity.png" alt="Specialicity">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/jindal.png" alt="Jindal">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/hccb.png" alt="HCCB">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="oem">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 d-flex">
                                    <div class="w-100 d-flex flex-column tab-box">                              
                                        <div class="row">
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/neptune.png" alt="Neptune">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/heatmax.png" alt="Heatmax">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/rototech.png" alt="Rototech">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/thermotech.png" alt="Thermotech">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/sachin-industries.png" alt="Sachin Industries">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/thermax.png" alt="Thermax">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/tata.png" alt="TATA">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="company-logo">
                                                    <img src="assets/images/newputge.png" alt="Newputge">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php include('Templates/footer.php'); ?>