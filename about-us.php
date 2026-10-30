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
    <title>About Us | Globe Star Engineers (India) Pvt. Ltd.</title>
    <meta name="description" content="Globe Star Engineers, a trusted industrial pump manufacturer in Ahmedabad. We provide durable and efficient pumping solutions for various applications." />
    <meta name="keywords" content="About Us | Globe Star Engineers (India) Pvt. Ltd." />
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
                    <h1 class="cm-title">About Us</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.globepump.com/" title="Home"><i class="fa fa-home me-1" aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="about-image">
						<div class="about-img-1">
							<figure>
								<img src="assets/images/about-2.png" alt="Globe Star Engineers (India) Pvt. Ltd.">
							</figure>
						</div>
						<div class="about-img-2">
							<figure>
								<img src="assets/images/about-us.png" alt="Globe Star Engineers (India) Pvt. Ltd.">
							</figure>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section-title">
						<h3>About Us</h3>
						<h2 class="text-anime-style-3">Globe Star Engineers (India) Pvt. Ltd.</h2>
					</div>
					<div class="about-content">
						<p>Established in 2002, <strong>Globe Star Engineers (India) Pvt. Ltd.</strong> is one of the leading engineering technology providers in India and other countries. We are an ISO 9001-2015 certified company recognized for designing and manufacturing high-quality, reliable pumping solutions.</p>

						<p>Headquartered in Gujarat, India, the Company offers a range of Industrial Pumps, Mechanical Seals, Pump Spares. Mr. Dhiraj Siddhapura started the Company by leveraging his extensive technical knowledge in this industry. The Company has a state-of-the-art manufacturing facility and testing units that are equipped with advanced machinery.</p>

						<p>We specialize in products for highly corrosive and demanding environments, including air-operated double diaphragm pumps, mechanically sealed centrifugal pumps, sewage pumps, dewatering pumps, chemical process pumps, pressure booster systems, and firefighting systems.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

    <section class="feature-two">
        <div class="section-shape-1" style="background-image: url(assets/images/section-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 feature-two-line">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <img src="assets/images/our-vision-about.png" alt="Our Vision">
                        </div>
                        <h3 class="feature-two__title">Our Vision</h3>
                        <p class="feature-two__text">Our vision is to improve the performance, reliability, and efficiency of existing systems through our products and solutions, which add value to your business.</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 feature-two-line">
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <img src="assets/images/our-mission-about.png" alt="Our Mission">
                        </div>
                        <h3 class="feature-two__title">Our Mission</h3>
                        <p class="feature-two__text">Our mission is to reduce total operating costs while increasing production capacity. We aim to become the top leaders in the pumping equipment industry.</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 feature-two-line">
                    <div class="feature-two__single last-child">
                        <div class="feature-two__icon">
                            <img src="assets/images/core-values-about.png" alt="Core Values">
                        </div>
                        <h3 class="feature-two__title">Core Values</h3>
                        <p class="feature-two__text">System and Process, Walk the talk, <br> Agility, Quality</p>
                        <div class="feature-two__shape-box">
                            <div class="feature-two__shape-1"></div>
                            <div class="feature-two__shape-2"></div>
                            <div class="feature-two__shape-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="research-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-2">
                    <div class="img-part">
                        <img src="assets/images/research-and-development.png" alt="Research & Development" title="Research & Development">
                        <div class="exp-text">
                            <h2 class="year">99%</h2>
                            <h4 class="text text-uppercase">Customer <br> Satisfaction</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <h3>Globe Star Engineers (India) Pvt. Ltd.</h3>
                        <h2 class="text-anime-style-3">Research & Development</h2>
                    </div>
                    <div class="content">
                        <p>The Globe Star Engineers (India) Pvt. Ltd. is a quality-oriented company. We have a team of qualified and well-experienced engineers in our research and development department. They are always up to date on market trends and technological advancements.</p>

                        <p>This allows us to introduce new product series and ranges while also improving existing products. We have all the latest tools and machinery that help us manufacture innovative products. Our future R&D efforts will focus on cost reduction, precise hydraulics, guarantees, and perfect field performance.</p>

                        <div class="h_series-btn mt-4">
                            <a href="javascript:void(0)" class="btn-default"><span>Get In Touch</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-info">
                        <ul class="nav justify-content-center">
                            <li><a class="active" id="assurance-tab" data-toggle="tab" href="#assurance">Quality Assurance</a></li>
                            <li><a class="" id="control-tab" data-toggle="tab" href="#control">Quality Control</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="assurance">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 d-flex">
                                    <div class="w-100 d-flex flex-column tab-box">
                                        <p><strong>Globe Star Engineers (India) Pvt. Ltd.</strong> has been serving the industries for over a decade. Our competent and experienced staff is capable of producing international-quality mechanical seals and industrial pumps that meet all of our client's needs.</p>

                                        <p>We have obtained an ISO accreditation for quality services. We believe in providing the highest quality products at industry-leading pricing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="control">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 d-flex">
                                    <div class="w-100 d-flex flex-column tab-box">                              
                                        <p>As a quality-oriented firm, we perform rigorous product testing at all stages of manufacturing. We have specified specific parameters to examine the goods in accordance with international standards.</p>

                                        <p>Before delivery, each batch of items is extensively tested on different parameters.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="other-sec d-none">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 gap-30">
                            <div class="card h-100 card-box">
                                <div class="card-body">
                                    <span class="number">01</span>
                                    <p>Successful completion of 10 years in business in Ahmedabad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 gap-30">
                            <div class="card h-100 card-box">
                                <div class="card-body">
                                    <span class="number">02</span>
                                    <p>Strategic partnerships formed with key industry players, plus recognition and awards for innovation and impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 gap-30">
                            <div class="card h-100 card-box">
                                <div class="card-body">
                                    <span class="number">03</span>
                                    <p>Company is expand to a larger facility with enhanced capacity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2002</h3>
                            </div>
                            <p>Founded by visionary Mr Dhiraj C. Siddhapura. Development of the initial product alongside extensive market research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2012</h3>
                            </div>
                            <p>Successful completion of 10 years in business in Ahmedabad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2018</h3>
                            </div>
                            <p>Expansion into new geographical markets, including international markets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2019</h3>
                            </div>
                            <p>Strategic partnerships formed with key industry players, plus recognition and awards for innovation and impact.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2021</h3>
                            </div>
                            <p>Introduction of new manufacturing unit with 9900 square feet area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2024</h3>
                            </div>
                            <p>Company is expand to a larger facility with enhanced capacity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 gap-30">
                    <div class="card h-100 card-box">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="cm-title">2025</h3>
                            </div>
                            <p>Establishing a fully automated manufacturing and testing unit to streamline our processes and ensure smoother production.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="timeline-sec">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="text-anime-style-2">Company History Timeline</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/images/globe-star-timeline.png" alt="Time Line">
                </div>
            </div>
            <div class="timeline-area d-none">
                <svg class="timeline-curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M5,88 C20,70 30,30 37,58 C45,75 55,80 63,75 C70,70 70,50 73,35 C80,20 90,20 95,40" stroke="#9b59b6" stroke-width="2" fill="none" vector-effect="non-scaling-stroke"/>
                </svg>
                <div class="timeline-point c1 point-2002">2002</div>
                <div class="timeline-point c2 point-2012">2012</div>
                <div class="timeline-point c3 point-2018">2018</div>
                <div class="timeline-point c4 point-2019">2019</div>
                <div class="timeline-point c5 point-2021">2021</div>
                <div class="timeline-point c6 point-2024">2024</div>
                <div class="timeline-point c7 point-2025">2025</div>
                <div class="timeline-content content-2002">
                    <p>Founded by visionary Mr Dhiraj C. Siddhapura. Development of the initial product alongside extensive market research.</p>
                </div>
                <div class="timeline-content content-2012">
                    <p>Successful completion of 10 years in business in Ahmedabad.</p>
                </div>
                <div class="timeline-content content-2018">
                    <p>Expansion into new geographical markets, including international markets.</p>
                </div>
                <div class="timeline-content content-2019">
                    <p>Strategic partnerships formed with key industry players, plus recognition and awards for innovation and impact.</p>
                </div>
                <div class="timeline-content content-2021">
                    <p>Introduction of new manufacturing unit with 9900 square feet area.</p>
                </div>
                <div class="timeline-content content-2024">
                    <p>Company is expand to a larger facility with enhanced capacity.</p>
                </div>
                <div class="timeline-content content-2025">
                    <p>Company is expand to a larger facility with enhanced capacity.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="vertical-timeline">
        <div class="vt-item">
            <div class="vt-year">2002</div>
            <div class="vt-content">
                Founded by visionary Mr Dhiraj C. Siddhapura. Development of the initial product alongside extensive market research.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2012</div>
            <div class="vt-content">
                Successful completion of 10 years in business in Ahmedabad.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2018</div>
            <div class="vt-content">
                Expansion into new geographical markets, including international markets.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2019</div>
            <div class="vt-content">
                Strategic partnerships formed with key industry players, plus recognition and awards for innovation and impact.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2021</div>
            <div class="vt-content">
                Introduction of new manufacturing unit with 9900 square feet area.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2024</div>
            <div class="vt-content">
                Company is expand to a larger facility with enhanced capacity.
            </div>
        </div>

        <div class="vt-item">
            <div class="vt-year">2025</div>
            <div class="vt-content">
                Company is expand to a larger facility with enhanced capacity.
            </div>
        </div>
    </div>

    <div class="company-counter-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">23</span>+</h3>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">580</span>+</h3>
                            <p>Project Success</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">3200</span>+</h3>
                            <p>Our Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">22</span>+</h3>
                            <p>Export Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">125</span>+</h3>
                            <p>Government Departments</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="company-counter-item">
                        <div class="company-counter-content">
                            <h3><span class="counter">50</span>+</h3>
                            <p>Skilled Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-facility">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-2">Infrastructure</h2>
                    </div>
                </div>
            </div>
            <div class="row facility-box align-items-center">
                <div class="col-lg-7">
                    <div class="service-list">
                        <div class="facility-item">
                            <div class="service-item-content">
                                <h3>Production Facility</h3>
                                <ul class="cm-list">
                                    <li>State of the Art Production facility spread over 27,000 Sq. Ft. at Kuha, Gujarat.</li>
                                    <li>In-House Machining Facility with VMC, CNC and Lathe Machines.</li>
                                    <li>We have implemented “ZERO DEFECT” policy from Inward of Raw Material till Finish Goods.</li>
                                    <li>We have highly skilled and experienced team of engineers to handle toughest job. Our company and factory is ISO 9001:2015 certified to ensure smooth operation and Quality.</li>
                                    <li>Globe Star Pumps ate manufactured as per Industry established standard and regulations.</li>
                                    <li>Production capacity of 2000 pumps per month.</li>
                                    <li>With experience of more than 2 decades, we have wide range of products to cater various application & Industries for their toughest service condition.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-img">
                        <div class="image-anime">
                            <img src="assets/images/production-facility.png" alt="Production Facility">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row facility-box align-items-center">
                <div class="col-lg-5">
                    <div class="service-img">
                        <div class="image-anime">
                            <img src="assets/images/testing-facility.png" alt="Testing Facility">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-list">
                        <div class="facility-item">
                            <div class="service-item-content">
                                <h3>Testing Facility</h3>
                                <ul class="cm-list">
                                    <li>Fully automated Test Bay.</li>
                                    <li>Capacity to test pump size up to 150 mm (6”).</li>
                                    <li>With large capacity of sump to test Submerged and surface pumps.</li>
                                    <li>All instruments and equipment are regularly calibrated and maintained for accuracy of result.</li>
                                    <li>Testing of NPSH, Run test, Power consumption test at given duty parameter.</li>
                                    <li>Testing of Inward Material, Inspection of Machined Parts to ensure quality and performance.</li>
                                    <li>Quality Assurance cannot be achieved by piece of paper but putting efforts as per industry established standards.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row facility-box align-items-center">
                <div class="col-lg-7">
                    <div class="service-list">
                        <div class="facility-item">
                            <div class="service-item-content">
                                <h3>Quality</h3>
                                <ul class="cm-list">
                                    <li>The core of our progress is a commitment to quality and excellence.</li>
                                    <li>Our equipment boasts cutting-edge features, comparable with the international standard and we compete globally, feature for feature, with other industry-leading brands.</li>
                                    <li>Every pump is duration tested on a test bench at maximum load. Every pump performance parameter is recorded and traceable.</li>
                                    <li>Every detail is minutely looked after and accordingly products are designed for their dedicated industry.</li>
                                    <li>Our quality checks at every steps from raw material inward till packaging of pumps to ensure better efficiency.</li>
                                    <li>Every Globe Star product is backed by a highly qualified team of engineers dedicated to designing products that promote success around the world.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-img">
                        <div class="image-anime">
                            <img src="assets/images/quality.png" alt="Quality">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row facility-box align-items-center">
                <div class="col-lg-5">
                    <div class="service-img">
                        <div class="image-anime">
                            <img src="assets/images/pre-and-post-sales-service.png" alt="Pre & Post Sales Service">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-list">
                        <div class="facility-item">
                            <div class="service-item-content">
                                <h3>Pre & Post Sales Service</h3>
                                <ul class="cm-list">
                                    <li>Pre and Post sales services play a crucial role in the entire customer satisfaction journey.</li>
                                    <li>We make relations, build trust and provide solutions not just sell pumps.</li>
                                    <li>No details or information untouched while making selection of material to pump.</li>
                                    <li>We have set up strict guidelines for after sales service.
                                        <ul class="cm-list mt-3">
                                            <li>Inventory management for spare parts</li>
                                            <li>Timely support for maintenance or technical resolutions.</li>
                                            <li>Inter-changeability of parts.</li>
                                        </ul>
                                    </li>
                                    <li>Backed by team of skilled and experienced service engineers.</li>
                                    <li>Gathering customer feedback to improve products and services.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php include('Templates/footer.php'); ?>