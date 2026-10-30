<?php
error_reporting(0);
include('Templates/config.php');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Industrial Pump Dealership Opportunity | Globe Star Engineers</title>

    <meta name="description"
          content="Become an authorized industrial pump dealer with Globe Star Engineers. Explore our industrial pump range, dealer benefits, support and apply for dealership.">

    <link rel="icon"
          href="<?php echo SITE_PATH; ?>assets/images/favicon-icon.png"
          type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          type="text/css"
          href="assets/css/style.css">


<style>

/* =========================================================
   GLOBE STAR DEALER PAGE
   BLUE THEME
   ========================================================= */

.dealership-page {
    padding: 0 0 0;
    background: #f5f8fc;
}

.dealer-section {
    padding: 75px 0;
}

.dealer-section-white {
    background: #ffffff;
}

.dealer-section-light {
    background: #f5f8fc;
}

.dealer-section-dark {
    background: #0b2d52;
}


/* =========================================================
   SECTION HEADING
   ========================================================= */

.dealer-heading {
    max-width: 850px;
    margin: 0 auto 50px;
    text-align: center;
}

.dealer-heading .dealer-label {
    display: inline-block;
    margin-bottom: 10px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 14px;
    font-weight: 700;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.dealer-heading h2 {
    margin: 0 0 15px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 40px;
    font-weight: 700;
    line-height: 1.15;
}

.dealer-heading p {
    max-width: 760px;
    margin: 0 auto;

    color: #606b78;

    font-family: 'Sora', sans-serif;
    font-size: 15px;
    line-height: 1.8;
}


/* =========================================================
   HERO
   ========================================================= */

.dealer-hero {
    padding: 75px 0 80px;

    background:
        linear-gradient(
            135deg,
            #edf5ff 0%,
            #ffffff 55%,
            #eef6ff 100%
        );

    border-bottom: 1px solid #e0eaf5;
}

.dealer-hero-content {
    padding-right: 0;
    text-align: center;
}

.dealer-hero-content p {
    max-width: 800px;
    margin: 0 auto 25px;
}

.dealer-hero-label {
    display: inline-block;

    margin-bottom: 16px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 15px;
    font-weight: 700;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.dealer-hero h2 {
    margin: 0 auto 20px;

    max-width: 900px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 50px;
    font-weight: 700;
    line-height: 1.12;
}

.dealer-hero h2 span {
    color: #0b63ce;
}

.dealer-hero p {
    max-width: 800px;

    margin: 0 auto 28px;

    color: #5e6977;

    font-family: 'Sora', sans-serif;
    font-size: 16px;
    line-height: 1.85;

    text-align: center;
}

.dealer-hero-points {
    display: grid;
    grid-template-columns: repeat(4, 1fr);

    width: 100%;
    max-width: 1050px;

    margin: 30px auto 0;

    gap: 15px 20px;

    align-items: center;
    justify-items: center;
}

.dealer-hero-point {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;

    color: #10233f;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    font-weight: 600;

    white-space: nowrap;
}

.dealer-hero-point span {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    flex: 0 0 24px;

    width: 24px;
    height: 24px;

    margin-right: 8px;

    border-radius: 50%;

    background: #1268d5;
    color: #ffffff;

    font-size: 12px;
    font-weight: 700;
}

.dealer-hero-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-height: 50px;

    padding: 0 30px;

    border-radius: 28px;

    background: #0b63ce;
    color: #ffffff;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    font-weight: 600;

    text-decoration: none;

    box-shadow: 0 8px 20px rgba(11,99,206,.20);

    transition: .3s;
}

.dealer-hero-btn:hover {
    background: #10233f;
    color: #ffffff;

    transform: translateY(-2px);
}


/* =========================================================
   INTRO CARDS
   ========================================================= */

.dealer-intro-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 25px;
}

.dealer-intro-card {
    padding: 30px 28px;

    border: 1px solid #e1e8f0;
    border-radius: 12px;

    background: #ffffff;

    transition: .3s;
}

.dealer-intro-card:hover {
    transform: translateY(-5px);

    border-color: #bcd6f3;

    box-shadow: 0 12px 30px rgba(16,35,63,.08);
}

.dealer-intro-number {
    margin-bottom: 15px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 14px;
    font-weight: 700;
}

.dealer-intro-card h3 {
    margin: 0 0 10px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 23px;
    font-weight: 700;
}

.dealer-intro-card p {
    margin: 0;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 13px;
    line-height: 1.75;
}


/* =========================================================
   BENEFITS
   ========================================================= */

.dealer-benefits-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 22px;
}

.dealer-benefit-card {
    min-height: 225px;

    padding: 30px;

    border: 1px solid #e0e7ef;
    border-radius: 10px;

    background: #ffffff;

    transition: .3s;
}

.dealer-benefit-card:hover {
    border-color: #bcd6f3;

    transform: translateY(-4px);

    box-shadow: 0 10px 25px rgba(16,35,63,.07);
}

.dealer-benefit-icon {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 48px;
    height: 48px;

    margin-bottom: 20px;

    border-radius: 50%;

    background: #eaf3ff;
    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 17px;
    font-weight: 700;
}

.dealer-benefit-card h3 {
    margin: 0 0 10px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 21px;
    font-weight: 700;
}

.dealer-benefit-card p {
    margin: 0;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 13px;
    line-height: 1.75;
}


/* =========================================================
   PRODUCTS
   ========================================================= */

/* =========================================================
   PRODUCTS WITH IMAGES
   ========================================================= */

.dealer-products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.dealer-product-card {
    display: flex;
    flex-direction: column;
    overflow: hidden;

    border: 1px solid #e0e7ef;
    border-radius: 12px;

    background: #ffffff;

    text-decoration: none;

    transition: .3s;

    box-shadow: 0 4px 15px rgba(16,35,63,.04);
}

.dealer-product-card:hover {
    border-color: #0b63ce;

    transform: translateY(-5px);

    box-shadow: 0 12px 28px rgba(16,35,63,.10);
}


/* PRODUCT IMAGE */

.dealer-product-image {
    width: 100%;
    height: 190px;

    padding: 18px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #ffffff;

    box-sizing: border-box;

    border-radius: 12px;
    overflow: hidden;
}

.dealer-product-image img {
    width: 100%;
    height: 100%;

    object-fit: contain;

    display: block;
    transition: .3s;
}

.dealer-product-card:hover .dealer-product-image img {
    transform: scale(1.05);
}


/* PRODUCT CONTENT */

.dealer-product-content {
    padding: 18px 20px 20px;

    border-top: 1px solid #edf1f5;

    text-align: center;
}

.dealer-product-number {
    display: block;

    margin-bottom: 6px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 13px;
    font-weight: 700;
}

.dealer-product-card h3 {
    margin: 0 0 10px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 19px;
    font-weight: 700;

    line-height: 1.25;
}

.dealer-product-card span.product-link {
    color: #0b63ce;

    font-family: 'Sora', sans-serif;
    font-size: 12px;
    font-weight: 600;
}


/* TABLET */

@media (max-width: 991px) {

    .dealer-products-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .dealer-product-image {
        height: 200px;
    }

}


/* MOBILE */

@media (max-width: 767px) {

    .dealer-products-grid {
        grid-template-columns: 1fr;
    }

    .dealer-product-image {
        height: 220px;
    }

}

/* =========================================================
   DEALER PROFILE
   ========================================================= */

.dealer-profile-wrapper {
    display: grid;

    grid-template-columns: 1fr;

    gap: 40px;

    align-items: center;

    max-width: 900px;

    margin: 0 auto;
}

.dealer-profile-content {
    text-align: center;
}

.dealer-profile-content .dealer-label {
    display: inline-block;

    margin-bottom: 10px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 14px;
    font-weight: 700;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.dealer-profile-content h2 {
    margin: 0 auto 18px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 40px;
    font-weight: 700;
    line-height: 1.15;
}

.dealer-profile-content > p {
    max-width: 800px;

    margin: 0 auto 30px;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    line-height: 1.8;
}

.dealer-profile-list {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 18px;

    text-align: left;
}

.dealer-profile-item {
    display: flex;
    align-items: flex-start;

    padding: 20px;

    border: 1px solid #e0e7ef;
    border-radius: 10px;

    background: #ffffff;
}

.dealer-profile-item > span {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    flex: 0 0 28px;

    width: 28px;
    height: 28px;

    margin-right: 12px;

    border-radius: 50%;

    background: #0b63ce;
    color: #ffffff;

    font-size: 12px;
}

.dealer-profile-item strong {
    display: block;

    margin-bottom: 3px;

    color: #10233f;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
}

.dealer-profile-item p {
    margin: 0;

    color: #69737e;

    font-family: 'Sora', sans-serif;
    font-size: 12px;
    line-height: 1.6;
}


/* =========================================================
   EXPECTATIONS
   ========================================================= */

.dealer-expectations-grid {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 20px;
}

.dealer-expectation {
    padding: 28px 24px;

    border-top: 3px solid #0b63ce;

    background: #ffffff;

    box-shadow: 0 5px 20px rgba(16,35,63,.05);
}

.dealer-expectation-number {
    display: block;

    margin-bottom: 15px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 15px;
    font-weight: 700;
}

.dealer-expectation h3 {
    margin: 0 0 10px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 20px;
    font-weight: 700;
}

.dealer-expectation p {
    margin: 0;

    color: #646e79;

    font-family: 'Sora', sans-serif;
    font-size: 12px;
    line-height: 1.7;
}


/* =========================================================
   PROCESS
   ========================================================= */

.dealer-process {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 20px;
}

.dealer-process-step {
    position: relative;

    text-align: center;
}

.dealer-process-number {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 65px;
    height: 65px;

    margin: 0 auto 20px;

    border-radius: 50%;

    background: #0b63ce;
    color: #ffffff;

    font-family: 'Rajdhani', sans-serif;
    font-size: 18px;
    font-weight: 700;

    box-shadow: 0 7px 18px rgba(11,99,206,.20);
}

.dealer-process-step h3 {
    margin: 0 0 10px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 21px;
    font-weight: 700;
}

.dealer-process-step p {
    margin: 0;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 12px;
    line-height: 1.7;
}


/* =========================================================
   SUPPORT
   ========================================================= */

.dealer-support-box {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 50px;

    padding: 50px;

    border-radius: 15px;

    background: #0b2d52;
}

.dealer-support-content .dealer-label {
    display: inline-block;

    margin-bottom: 10px;

    color: #73b4ff;

    font-family: 'Rajdhani', sans-serif;
    font-size: 14px;
    font-weight: 700;

    letter-spacing: 1.5px;
}

.dealer-support-content h2 {
    margin: 0 0 17px;

    color: #ffffff;

    font-family: 'Rajdhani', sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 1.15;
}

.dealer-support-content p {
    margin: 0;

    color: #d6dee8;

    font-family: 'Sora', sans-serif;
    font-size: 13px;
    line-height: 1.8;
}

.dealer-support-list {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 15px;
}

.dealer-support-item {
    color: #ffffff;

    font-family: 'Sora', sans-serif;
    font-size: 13px;
    line-height: 1.6;
}

.dealer-support-item span {
    margin-right: 7px;

    color: #73b4ff;
    font-weight: 700;
}


/* =========================================================
   FAQ
   ========================================================= */

.dealer-faq-wrapper {
    max-width: 900px;

    margin: 0 auto;
}

.dealer-faq-item {
    margin-bottom: 12px;

    border: 1px solid #dfe7ef;
    border-radius: 7px;

    background: #ffffff;

    overflow: hidden;
}

.dealer-faq-question {
    display: flex;
    align-items: center;
    justify-content: space-between;

    width: 100%;

    padding: 20px 22px;

    border: none;

    background: #ffffff;

    color: #10233f;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    font-weight: 600;

    text-align: left;

    cursor: pointer;
}

.dealer-faq-question span {
    color: #0b63ce;

    font-size: 22px;

    transition: .3s;
}

.dealer-faq-answer {
    display: none;

    padding: 0 22px 20px;
}

.dealer-faq-answer p {
    margin: 0;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 13px;
    line-height: 1.8;
}

.dealer-faq-item.active .dealer-faq-answer {
    display: block;
}

.dealer-faq-item.active .dealer-faq-question span {
    transform: rotate(45deg);
}


/* =========================================================
   EXISTING IMAGE + FORM
   MOVED TO LAST MAIN SECTION
   ========================================================= */

.dealer-application-section {
    padding: 85px 0;

    background: #f5f8fc;
}

.dealer-application-heading {
    max-width: 800px;

    margin: 0 auto 45px;

    text-align: center;
}

.dealer-application-heading .dealer-label {
    display: inline-block;

    margin-bottom: 10px;

    color: #0b63ce;

    font-family: 'Rajdhani', sans-serif;
    font-size: 14px;
    font-weight: 700;

    letter-spacing: 1.5px;
}

.dealer-application-heading h2 {
    margin: 0 0 12px;

    color: #10233f;

    font-family: 'Rajdhani', sans-serif;
    font-size: 40px;
    font-weight: 700;
}

.dealer-application-heading p {
    margin: 0;

    color: #626c78;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    line-height: 1.7;
}


/* =========================================================
   EXISTING IMAGE
   ========================================================= */

.dealer-image-box {
    width: 100%;

    overflow: hidden;

    border-radius: 15px;

    background: transparent;

    display: flex;
    align-items: flex-start;
    justify-content: center;
}

.dealer-image-box img {
    width: 100%;

    max-width: 100%;

    height: auto;

    display: block;

    object-fit: contain;
}


/* =========================================================
   EXISTING FORM
   ========================================================= */

.dealer-form-area {
    width: 100%;

    padding: 0 10px 30px;
}

.dealer-info-box {
    width: 100%;

    box-sizing: border-box;

    padding: 25px;

    background: #ffffff;

    border: 1px solid #dce5ef;

    border-radius: 15px;

    box-shadow: 0 5px 18px rgba(16,35,63,.07);
}

.dealer-info-box h2 {
    margin: 0 0 8px;

    font-family: 'Rajdhani', sans-serif;
    font-size: 25px;
    font-weight: 600;

    color: #222;
}

.dealer-info-box .blue {
    color: #0b63ce;
    font-weight: 700;
}

.dealer-info-box .red {
    color: #0b63ce;
    font-weight: 700;
}

.dealer-info-box p {
    margin: 5px 0;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    line-height: 1.6;

    color: #222;
}


/* =========================================================
   FORM TITLE
   ========================================================= */

.dealer-form-title {
    text-align: center;

    margin: 40px 0 25px;
}

.dealer-form-title h3 {
    margin: 0;

    font-family: 'Rajdhani', sans-serif;
    font-size: 24px;
    font-weight: 600;

    color: #10233f;
}


/* =========================================================
   FORM
   ========================================================= */

.dealer-form {
    width: 100%;
}

.dealer-form .dealer-row {
    display: flex !important;

    width: 100% !important;

    gap: 20px;

    margin: 0 !important;
}

.dealer-form .dealer-col {
    width: 50% !important;

    flex: 0 0 calc(50% - 10px) !important;

    max-width: calc(50% - 10px) !important;

    padding: 0 !important;
}

.dealer-form .dealer-group {
    width: 100%;

    margin-bottom: 20px;
}

.dealer-form label {
    display: block;

    width: 100%;

    text-align: center;

    font-family: 'Sora', sans-serif;
    font-size: 13px;

    margin-bottom: 6px;

    color: #333;

    font-weight: 500;
}

.dealer-form input,
.dealer-form textarea,
.dealer-form select {
    width: 100% !important;

    box-sizing: border-box !important;

    border: 1px solid #d5dfe9;

    background: #ffffff;

    outline: none;

    font-family: 'Sora', sans-serif;
    font-size: 14px;

    color: #222;

    transition: .3s;
}

.dealer-form input,
.dealer-form select {
    height: 42px;

    padding: 0 18px;

    border-radius: 25px;
}

.dealer-form textarea {
    height: 90px;

    padding: 12px 18px;

    border-radius: 15px;

    resize: none;
}

.dealer-form input:focus,
.dealer-form textarea:focus,
.dealer-form select:focus {
    border-color: #0b63ce;

    background: #ffffff;

    box-shadow: 0 0 0 3px rgba(11,99,206,.08);
}


/* =========================================================
   BUTTON
   ========================================================= */

.dealer-submit-wrap {
    width: 100%;

    text-align: center;
}

.dealer-submit-btn {
    width: 50%;

    border: none;

    background: #0b63ce;

    color: #ffffff;

    height: 46px;

    border-radius: 25px;

    font-family: 'Sora', sans-serif;
    font-size: 16px;
    font-weight: 600;

    cursor: pointer;

    transition: .3s;
}

.dealer-submit-btn:hover {
    background: #10233f;

    transform: translateY(-2px);
}


/* =========================================================
   FINAL CTA
   ========================================================= */

.dealer-final-cta {
    padding: 75px 0;

    background: #0b63ce;

    text-align: center;
}

.dealer-final-cta h2 {
    max-width: 850px;

    margin: 0 auto 15px;

    color: #ffffff;

    font-family: 'Rajdhani', sans-serif;
    font-size: 42px;
    font-weight: 700;
    line-height: 1.15;
}

.dealer-final-cta p {
    max-width: 700px;

    margin: 0 auto 25px;

    color: rgba(255,255,255,.92);

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    line-height: 1.8;
}

.dealer-final-btn {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 48px;

    padding: 0 28px;

    border-radius: 25px;

    background: #ffffff;
    color: #10233f;

    font-family: 'Sora', sans-serif;
    font-size: 14px;
    font-weight: 600;

    text-decoration: none;

    transition: .3s;
}

.dealer-final-btn:hover {
    background: #10233f;
    color: #ffffff;
}


/* =========================================================
   BREADCRUMB
   ========================================================= */

.inner-banner .breadcrumb,
.inner-banner .breadcrumb-item,
.inner-banner .breadcrumb-item a,
.inner-banner .breadcrumb-item.active {
    color: #ffffff !important;
}

.inner-banner .breadcrumb-item + .breadcrumb-item::before {
    color: #ffffff !important;
}


/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 991px) {

    .dealer-hero-content {
        padding: 0 10px;
    }

    .dealer-hero h2 {
        font-size: 43px;
    }

    .dealer-intro-grid,
    .dealer-benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .dealer-products-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .dealer-expectations-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .dealer-profile-wrapper {
        grid-template-columns: 1fr;
    }

    .dealer-support-box {
        grid-template-columns: 1fr;

        padding: 40px;
    }

    .dealer-process {
        grid-template-columns: repeat(2, 1fr);

        row-gap: 40px;
    }

}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    .dealer-section {
        padding: 55px 15px;
    }

    .dealer-hero {
        padding: 50px 15px 55px;
    }

    .dealer-hero h2 {
        font-size: 35px;
    }

    .dealer-hero p {
        font-size: 14px;

        line-height: 1.8;
    }

    .dealer-heading h2 {
        font-size: 31px;
    }

    .dealer-heading p {
        font-size: 13px;
    }

    .dealer-intro-grid,
    .dealer-benefits-grid,
    .dealer-products-grid,
    .dealer-expectations-grid,
    .dealer-process {
        grid-template-columns: 1fr;
    }

    .dealer-profile-content h2 {
        font-size: 31px;
    }

    .dealer-profile-list {
        grid-template-columns: 1fr;
    }

    .dealer-support-box {
        padding: 30px 22px;
    }

    .dealer-support-content h2 {
        font-size: 31px;
    }

    .dealer-support-list {
        grid-template-columns: 1fr;
    }

    .dealer-application-section {
        padding: 55px 15px;
    }

    .dealer-application-heading h2 {
        font-size: 31px;
    }

    .dealer-form .dealer-row {
        display: block !important;
    }

    .dealer-form .dealer-col {
        width: 100% !important;

        max-width: 100% !important;

        flex: 0 0 100% !important;
    }

    .dealer-submit-btn {
        width: 100%;
    }

    .dealer-image-box {
        margin-bottom: 30px;
    }

    .dealer-form-area {
        padding: 0;
    }

    .dealer-final-cta {
        padding: 55px 15px;
    }

    .dealer-final-cta h2 {
        font-size: 32px;
    }

@media (max-width: 991px) {

    .dealer-hero-points {
        grid-template-columns: repeat(2, 1fr);
        max-width: 700px;
    }

}

@media (max-width: 767px) {

    .dealer-hero-points {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .dealer-hero-point {
        white-space: normal;
        justify-content: flex-start;
    }

}

}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .dealer-hero h2 {
        font-size: 31px;
    }

    .dealer-hero-label {
        font-size: 13px;
    }

    .dealer-hero-btn {
        width: 100%;
    }

    .dealer-info-box {
        padding: 20px;
    }

    .dealer-info-box h2 {
        font-size: 23px;
    }

}

</style>
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


<!-- =========================================================
     INNER BANNER
     ========================================================= -->

<div class="inner-banner"
     style="background-image:url(assets/images/about-innerbg.png);
            background-position:center left;
            background-size:cover;">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1 class="cm-title">
                    Industrial Pump Dealership
                </h1>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item">

                        <a href="https://www.globepump.com/"
                           title="Home">

                            <i class="fa fa-home me-1"
                               aria-hidden="true"></i>

                            Home

                        </a>

                    </li>

                    <li class="breadcrumb-item active"
                        aria-current="page">

                        Industrial Pump Dealership

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     MAIN DEALER PAGE
     ========================================================= -->

<main class="dealership-page">


<!-- =========================================================
     1. HERO
     ========================================================= -->

<section class="dealer-hero">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="dealer-hero-content">

                    <span class="dealer-hero-label">
                        DEALER & DISTRIBUTOR OPPORTUNITY
                    </span>

                    <h2>
                        Become a <span>Globe Star</span>
                        Industrial Pump Dealer
                    </h2>

                    <p>
                        Partner with Globe Star Engineers (India) Pvt. Ltd.
                        and expand your industrial product portfolio with
                        reliable pumping solutions for industrial customers
                        and applications.
                    </p>

                    <div class="dealer-hero-points">

                        <div class="dealer-hero-point">
                            <span>✓</span>
                            Industrial Pump Product Range
                        </div>

                        <div class="dealer-hero-point">
                            <span>✓</span>
                            Technical & Sales Support
                        </div>

                        <div class="dealer-hero-point">
                            <span>✓</span>
                            Marketing & Product Support
                        </div>

                        <div class="dealer-hero-point">
                            <span>✓</span>
                            Long-Term Channel Partnership
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     2. WHY PARTNER
     ========================================================= -->

<section class="dealer-section dealer-section-white">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                WHY PARTNER WITH GLOBE Star
            </span>

            <h2>
                Build Your Industrial Pump Business With Us
            </h2>

           <p style="text-align: center;">We are looking to build long-term relationships with capable dealers and channel partners who understand the industrial market and can develop pump business in their territory.</p>

        </div>


        <div class="dealer-intro-grid">

            <div class="dealer-intro-card">

                <div class="dealer-intro-number">
                    01
                </div>

                <h3>
                    Industrial Focus
                </h3>

                <p>
                    Our product portfolio is focused on industrial pumping
                    applications and solutions for different industries.
                </p>

            </div>


            <div class="dealer-intro-card">

                <div class="dealer-intro-number">
                    02
                </div>

                <h3>
                    Manufacturer Support
                </h3>

                <p>
                    Work with a manufacturer-backed team for product,
                    application and customer enquiry support.
                </p>

            </div>


            <div class="dealer-intro-card">

                <div class="dealer-intro-number">
                    03
                </div>

                <h3>
                    Long-Term Partnership
                </h3>

                <p>
                    Our objective is to develop a professional and
                    long-term industrial dealer network.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     3. DEALER BENEFITS
     ========================================================= -->

<section class="dealer-section dealer-section-light">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                DEALER BENEFITS
            </span>

            <h2>
                Why Become a Globe Star Dealer?
            </h2>

            <p style="text-align: center;">
                Suitable channel partners can benefit from our product
                range, technical coordination, sales assistance and
                marketing resources.
            </p>

        </div>


        <div class="dealer-benefits-grid">

            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    01
                </div>

                <h3>
                    Industrial Product Portfolio
                </h3>

                <p>
                    Offer a range of industrial pumping solutions for
                    different applications and customer requirements.
                </p>

            </div>


            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    02
                </div>

                <h3>
                    Technical Support
                </h3>

                <p>
                    Get product and application-related support during
                    customer enquiries and technical discussions.
                </p>

            </div>


            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    03
                </div>

                <h3>
                    Sales Support
                </h3>

                <p>
                    Coordinate with our team for product requirements,
                    enquiries and suitable business opportunities.
                </p>

            </div>


            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    04
                </div>

                <h3>
                    Marketing Support
                </h3>

                <p>
                    Access product catalogues, brochures and marketing
                    material to support your sales activities.
                </p>

            </div>


            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    05
                </div>

                <h3>
                    Manufacturer Coordination
                </h3>

                <p>
                    Get direct coordination with the Globe Star team for
                    product and application-related discussions.
                </p>

            </div>


            <div class="dealer-benefit-card">

                <div class="dealer-benefit-icon">
                    06
                </div>

                <h3>
                    Business Expansion
                </h3>

                <p>
                    Add industrial pumping solutions to your portfolio
                    and develop new opportunities in your market.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     4. PRODUCT RANGE
     ========================================================= -->

<!-- =========================================================
     4. PRODUCT RANGE
     ========================================================= -->

<section class="dealer-section dealer-section-white">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                OUR INDUSTRIAL PUMP RANGE
            </span>

            <h2>
                Products You Can Offer Your Customers
            </h2>

            <p>
                Explore our range of industrial pumping solutions
                designed for different applications and industries.
            </p>

        </div>


        <div class="dealer-products-grid">


            <!-- 01 AODD PUMP -->

            <a href="aodd-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/aodd-pump.png"
                         alt="AODD Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        01
                    </span>

                    <h3>
                        AODD Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 02 CHEMICAL PROCESS PUMP -->

            <a href="chemical-process-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/chemical-process-pump-04.png"
                         alt="Chemical Process Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        02
                    </span>

                    <h3>
                        Chemical Process Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 03 CENTRIFUGAL PROCESS PUMP -->

            <a href="centrifugal-process-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/centrifugal-process-pump.png"
                         alt="Centrifugal Process Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        03
                    </span>

                    <h3>
                        Centrifugal Process Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 04 PP CENTRIFUGAL PUMP -->

            <a href="pp-centrifugal-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/pp-centrifugal-pump.png"
                         alt="PP Centrifugal Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        04
                    </span>

                    <h3>
                        PP Centrifugal Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 05 SEWAGE PUMP -->

            <a href="sewage-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/sewage-pump.png"
                         alt="Sewage Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        05
                    </span>

                    <h3>
                        Sewage Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 06 INDUSTRIAL MUD PUMP -->

            <a href="industrial-mud-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/mud-pump.png"
                         alt="Industrial Mud Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        06
                    </span>

                    <h3>
                        Industrial Mud Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 07 DEWATERING PUMP -->

            <a href="dewatering-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/dewatering-pump.png"
                         alt="Dewatering Pump">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        07
                    </span>

                    <h3>
                        Dewatering Pump
                    </h3>

                    <span class="product-link">
                        View Product →
                    </span>

                </div>

            </a>


            <!-- 08 VERTICAL MULTISTAGE INLINE PUMP -->

            <a href="industrial-pump.php"
               class="dealer-product-card">

                <div class="dealer-product-image">

                    <img src="assets/images/industrial-pump.png"
                         alt="More Product Categories">

                </div>

                <div class="dealer-product-content">

                    <span class="dealer-product-number">
                        08
                    </span>

                    <h3>
                        More Product Categories
                    </h3>

                    <span class="product-link">
                        Explore All Products →
                    </span>

                </div>

            </a>


        </div>

    </div>

</section>

<!-- =========================================================
     5. WHO CAN BECOME DEALER
     ========================================================= -->

<section class="dealer-section dealer-section-light">

    <div class="container">

        <div class="dealer-profile-wrapper">

            <div class="dealer-profile-content">

                <span class="dealer-label">
                    IDEAL DEALER PROFILE
                </span>

                <h2>
                    Who Can Become a Globe Star Dealer?
                </h2>

                <p style="text-align: center;">
                    We are looking for businesses with an established
                    industrial market presence and the capability to
                    develop industrial pump sales in their territory.
                </p>


                <div class="dealer-profile-list">


                    <div class="dealer-profile-item">

                        <span>✓</span>

                        <div>

                            <strong>
                                Industrial Pump Dealers
                            </strong>

                            <p>
                                Dealers already working with industrial
                                pumps and related equipment.
                            </p>

                        </div>

                    </div>


                    <div class="dealer-profile-item">

                        <span>✓</span>

                        <div>

                            <strong>
                                Industrial Equipment Dealers
                            </strong>

                            <p>
                                Dealers handling industrial machinery,
                                equipment or engineering products.
                            </p>

                        </div>

                    </div>


                    <div class="dealer-profile-item">

                        <span>✓</span>

                        <div>

                            <strong>
                                Engineering Product Suppliers
                            </strong>

                            <p>
                                Companies supplying engineering products
                                and solutions to industrial customers.
                            </p>

                        </div>

                    </div>


                    <div class="dealer-profile-item">

                        <span>✓</span>

                        <div>

                            <strong>
                                Existing Pump & Motor Dealers
                            </strong>

                            <p>
                                Businesses looking to add industrial
                                pump solutions to their portfolio.
                            </p>

                        </div>

                    </div>


                    <div class="dealer-profile-item">

                        <span>✓</span>

                        <div>

                            <strong>
                                Industrial Solution Providers
                            </strong>

                            <p>
                                Businesses with established industrial
                                customer relationships and local market
                                presence.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     6. WHAT WE EXPECT
     ========================================================= -->

<section class="dealer-section dealer-section-white">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                OUR EXPECTATIONS
            </span>

            <h2>
                What We Look For in Our Dealers
            </h2>

            <p style="text-align: center;">
                We aim to build a strong and professional channel network
                with partners who can actively develop the industrial
                pump market.
            </p>

        </div>


        <div class="dealer-expectations-grid">


            <div class="dealer-expectation">

                <span class="dealer-expectation-number">
                    01
                </span>

                <h3>
                    Industrial Market Experience
                </h3>

                <p>
                    Understanding of industrial customers, applications
                    and local market requirements.
                </p>

            </div>


            <div class="dealer-expectation">

                <span class="dealer-expectation-number">
                    02
                </span>

                <h3>
                    Customer Network
                </h3>

                <p>
                    Existing relationships with industries, contractors,
                    consultants or project customers.
                </p>

            </div>


            <div class="dealer-expectation">

                <span class="dealer-expectation-number">
                    03
                </span>

                <h3>
                    Sales Capability
                </h3>

                <p>
                    Ability to identify opportunities and actively
                    develop industrial pump sales.
                </p>

            </div>


            <div class="dealer-expectation">

                <span class="dealer-expectation-number">
                    04
                </span>

                <h3>
                    Professional Approach
                </h3>

                <p>
                    Commitment to responsible sales practices and
                    long-term customer relationships.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     7. DEALER ONBOARDING PROCESS
     ========================================================= -->

<section class="dealer-section dealer-section-light">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                SIMPLE PROCESS
            </span>

            <h2>
                How to Become a Globe Star Dealer
            </h2>

            <p style="text-align: center;">
                Our dealership enquiry process is designed to understand
                your business profile and market potential.
            </p>

        </div>


        <div class="dealer-process">


            <div class="dealer-process-step">

                <div class="dealer-process-number">
                    01
                </div>

                <h3>
                    Submit Application
                </h3>

                <p style="text-align: center;">
                    Fill in your company, experience and market details
                    through the dealership application form.
                </p>

            </div>


            <div class="dealer-process-step">

                <div class="dealer-process-number">
                    02
                </div>

                <h3>
                    Application Review
                </h3>

                <p style="text-align: center;">
                    Our team reviews your company profile, industrial
                    experience and proposed market.
                </p>

            </div>


            <div class="dealer-process-step">

                <div class="dealer-process-number">
                    03
                </div>

                <h3>
                    Business Discussion
                </h3>

                <p style="text-align: center;">
                    We connect with suitable applicants to understand
                    their market and dealership requirements.
                </p>

            </div>


            <div class="dealer-process-step">

                <div class="dealer-process-number">
                    04
                </div>

                <h3>
                    Dealer Onboarding
                </h3>

                <p style="text-align: center;">
                    Suitable applicants can proceed toward dealership
                    onboarding and business development.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     8. DEALER SUPPORT
     ========================================================= -->

<section class="dealer-section dealer-section-white">

    <div class="container">

        <div class="dealer-support-box">


            <div class="dealer-support-content">

                <span class="dealer-label">
                    PARTNER SUPPORT
                </span>

                <h2>
                    We Support You Beyond the Product
                </h2>

                <p>
                    Selling industrial pumps requires product knowledge,
                    technical understanding and customer coordination.
                    Globe Star works with suitable channel partners to
                    support them throughout the sales process.
                </p>

            </div>


            <div class="dealer-support-list">


                <div class="dealer-support-item">
                    <span>✓</span>
                    Product Information & Catalogues
                </div>


                <div class="dealer-support-item">
                    <span>✓</span>
                    Technical Product Support
                </div>


                <div class="dealer-support-item">
                    <span>✓</span>
                    Sales & Application Coordination
                </div>


                <div class="dealer-support-item">
                    <span>✓</span>
                    Marketing Material
                </div>


                <div class="dealer-support-item">
                    <span>✓</span>
                    Customer Enquiry Coordination
                </div>


                <div class="dealer-support-item">
                    <span>✓</span>
                    Manufacturer-Level Assistance
                </div>


            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     9. FAQ
     ========================================================= -->

<section class="dealer-section dealer-section-light">

    <div class="container">

        <div class="dealer-heading">

            <span class="dealer-label">
                FREQUENTLY ASKED QUESTIONS
            </span>

            <h2>
                Dealer Program FAQs
            </h2>

        </div>


        <div class="dealer-faq-wrapper">


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    Who can apply for Globe Star dealership?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        Industrial pump dealers, engineering product
                        dealers, industrial equipment suppliers, pump
                        and motor dealers and other suitable businesses
                        with industrial market experience can apply.
                    </p>

                </div>

            </div>


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    Do I need previous pump industry experience?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        Relevant industrial or pump industry experience
                        is preferred. Applications are evaluated based
                        on business profile, market presence and ability
                        to develop industrial pump business.
                    </p>

                </div>

            </div>


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    Which products can I deal in?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        Depending on the business profile and market,
                        dealership opportunities may include AODD pumps,
                        chemical process pumps, centrifugal process pumps,
                        PP centrifugal pumps, sewage pumps, industrial
                        mud pumps and dewatering pumps.
                    </p>

                </div>

            </div>


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    Do you provide technical support?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        Our team can provide product and application
                        related support to suitable channel partners
                        during customer enquiries and sales discussions.
                    </p>

                </div>

            </div>


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    Is dealership available across India?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        We are open to dealership opportunities in
                        different Indian markets. Availability and
                        suitability are evaluated based on territory,
                        existing network and business potential.
                    </p>

                </div>

            </div>


            <div class="dealer-faq-item">

                <button type="button"
                        class="dealer-faq-question">

                    How do I apply for dealership?

                    <span>+</span>

                </button>

                <div class="dealer-faq-answer">

                    <p>
                        Complete the dealership application form below
                        with accurate company, experience and market
                        details. Our team will review your application
                        and contact suitable applicants.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     10. EXISTING IMAGE + EXISTING FORM
     KEPT AT THE END
     ========================================================= -->

<section class="dealer-application-section"
         id="dealer-application">

    <div class="container">


        <div class="dealer-application-heading">

            <span class="dealer-label">
                DEALER APPLICATION
            </span>

            <h2>
                Apply for Globe Star Dealership
            </h2>

            <p style="text-align: center;">
                Tell us about your company, industrial experience and
                target market. Our team will review your profile and
                get in touch with you.
            </p>

        </div>


        <div class="row align-items-start">


            <!-- =================================================
                 EXISTING IMAGE
                 NOT REMOVED
                 ================================================= -->

            <div class="col-lg-6 mb-4 mb-lg-0">

                <div class="dealer-image-box">

                    <img src="assets/images/dealer.png"
                         alt="Globe Star Industrial Pump Dealership">

                </div>

            </div>


            <!-- =================================================
                 EXISTING FORM
                 NOT REMOVED
                 ================================================= -->

            <div class="col-lg-6">

                <div class="dealer-form-area">


                    <!-- EXISTING TOP INFO -->

                    <div class="dealer-info-box">

                        <h2>
                            Join the
                            <span class="blue">
                                Globe Star
                            </span>

                            <span class="red">
                                Network
                            </span>
                        </h2>

                        <p>
                            We are looking for reputable industrial
                            dealers and channel partners to associate
                            with us.
                        </p>

                        <p>
                            Submit your dealership enquiry and our team
                            will get in touch with you.
                        </p>

                    </div>


                    <!-- EXISTING FORM HEADING -->

                    <div class="dealer-form-title">

                        <h3>
                            Come Join &amp; Partner With Us
                        </h3>

                    </div>


                    <!-- EXISTING DEALERSHIP FORM -->

                    <form action="dealership-submit.php"
                          method="POST"
                          class="dealer-form">


                        <!-- COMPANY / FIRM NAME -->

                        <div class="dealer-group">

                            <label>
                                Company / Firm Name *
                            </label>

                            <input type="text"
                                   name="company_name"
                                   placeholder="Enter Company / Firm Name"
                                   required>

                        </div>


                        <!-- OFFICE ADDRESS -->

                        <div class="dealer-group">

                            <label>
                                Office Address *
                            </label>

                            <textarea name="office_address"
                                      placeholder="Enter complete office address"
                                      required></textarea>

                        </div>


                        <!-- CITY + STATE -->

                        <div class="dealer-row">

                            <div class="dealer-col">

                                <div class="dealer-group">

                                    <label>
                                        City *
                                    </label>

                                    <input type="text"
                                           name="city"
                                           placeholder="Enter City"
                                           required>

                                </div>

                            </div>


                            <div class="dealer-col">

                                <div class="dealer-group">

                                    <label>
                                        State *
                                    </label>

                                    <input type="text"
                                           name="state"
                                           placeholder="Enter State"
                                           required>

                                </div>

                            </div>

                        </div>


                        <!-- ANNUAL TURNOVER + MOBILE -->

                        <div class="dealer-row">

                            <div class="dealer-col">

                                <div class="dealer-group">

                                    <label>
                                        Annual Turnover *
                                    </label>

                                    <input type="text"
                                           name="annual_turnover"
                                           placeholder="e.g. ₹1 Crore"
                                           required>

                                </div>

                            </div>


                            <div class="dealer-col">

                                <div class="dealer-group">

                                    <label>
                                        Mobile Number *
                                    </label>

                                    <input type="tel"
                                           name="mobile_number"
                                           placeholder="Enter Mobile Number"
                                           pattern="[0-9+\-\s()]{10,15}"
                                           required>

                                </div>

                            </div>

                        </div>


                        <!-- EMAIL -->

                        <div class="dealer-group">

                            <label>
                                Email ID *
                            </label>

                            <input type="email"
                                   name="email"
                                   placeholder="Enter Email ID"
                                   required>

                        </div>


                        <!-- CITY / DISTRICT -->

                        <div class="dealer-group">

                            <label>
                                City / District Applied For *
                            </label>

                            <input type="text"
                                   name="applied_city_district"
                                   placeholder="Enter City / District"
                                   required>

                        </div>


                        <!-- INDUSTRIAL EXPERIENCE -->

                        <div class="dealer-group">

                            <label>
                                Years of Industrial Experience *
                            </label>

                            <input type="number"
                                   name="industrial_experience"
                                   placeholder="Enter Years of Experience"
                                   min="0"
                                   max="100"
                                   required>

                        </div>


                        <!-- CURRENT PRODUCTS -->

                        <div class="dealer-group">

                            <label>
                                Products Currently Dealing In *
                            </label>

                            <textarea name="products_dealing"
                                      placeholder="Mention the products you are currently dealing in"
                                      required></textarea>

                        </div>


                        <!-- SUBMIT -->

                        <div class="dealer-submit-wrap">

                            <button type="submit"
                                    class="dealer-submit-btn">

                                Apply

                            </button>

                        </div>


                    </form>


                </div>

            </div>

        </div>

    </div>

</section>

</main>


<!-- =========================================================
     FAQ SCRIPT
     ========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const questions =
        document.querySelectorAll(".dealer-faq-question");

    questions.forEach(function (question) {

        question.addEventListener("click", function () {

            const currentItem =
                question.closest(".dealer-faq-item");

            document
                .querySelectorAll(".dealer-faq-item")
                .forEach(function (item) {

                    if (item !== currentItem) {

                        item.classList.remove("active");

                    }

                });

            currentItem.classList.toggle("active");

        });

    });

});

</script>


<?php include('Templates/footer.php'); ?>


</body>

</html>