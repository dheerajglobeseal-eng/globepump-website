<?php
http_response_code(404);

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

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<?php include('Templates/header.php'); ?>

    <div class="inner-banner" style="background-image:url(assets/images/about-innerbg.png); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="cm-title">404</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   <div class="cm-innerpage error-page">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center m-auto">
               <div class="cm-title text-uppercase">Oops! Page Not Found!</div>
               <p class="text-center mt-4">You may have mis-typed the URL. Or the page has been removed.<br> Actually, there is nothing to see here...<br> Click on the links below to do something, Thanks!</p>
               <div class="about-content-btn mt-4">
                  <a href="https://www.globepump.com/" class="btn-default"><span>Back To Home</span></a>
               </div>
            </div>
         </div>
      </div>
   </div>

	<?php include('Templates/footer.php'); ?>