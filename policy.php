<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buildIT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- logo -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/Web Logo.png">

    <!-- Box icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,900;1,600&display=swap" rel="stylesheet">

    <!-- Carousel and others -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">

    <style type="text/css">

        /* FONTS */
        @font-face {
            font-family: Bauhaus;
            src: url(./fonts/bauhaus-93/BAUHS93.ttf);
            /* font-weight: bold; */
        }
        @font-face {
            font-family: Jura;
            src: url(./fonts/Jura/static/Jura-Bold.ttf);
            font-weight: bold;
        }
        @font-face {
            font-family: Jura-medium;
            src: url(./fonts/Jura/static/Jura-Medium.ttf);
            font-weight: bold;
        }

            html {
                scroll-behavior: smooth;
            }
            body{
                background-color: #000;
              	color: #A1ACB3;
                font-family: Jura;
            }
            #nav-2{
              z-index: 100;
              background: transparent; 
              padding-bottom: 0; 
              padding-top: 0; 
              margin-top: -10px;
            }
            .nav-item a{
                font-size: 12px !important;
            }
      		.div-quote{
              color: #04ac9c; font-size: 24px; width: 70%; margin: auto;
      		}
            .container p
            /*#portfolio-content*/{
                color: #A1ACB3;
            }
            #what-we-do-content{
                color: #A1ACB3;
                padding: 20px 10px;
            }
          .build{			
            color: #04ac9c;
            font-weight: bold;
            font-size: 33px;
            /* font-family: Bauhaus !important; */
          }
            .buildIT{
                color: #04ac9c;
                font-weight: bold;
                font-size: 26px;
                font-family: Bauhaus !important;
            }

            /* hr with text in-between */
            h1 {
                overflow: hidden;
                text-align: center;
                /* position: relative; */
            }
            .heading{
                background-color: black;
                padding-right: 7px;
                padding-left: 7px;
                z-index: 20;
            }

            .headingWhite{
                background-color: white;
                padding-left: 7px;
                padding-right: 7px;
                z-index: 20;
            }

            /* List styling */
            ol {
                counter-reset: list;
            }
            ol > li {
                list-style: none;
            }
            ol > li:before {
                content: counter(list) ") ";
                counter-increment: list;
            }
            .ul-style {
              list-style: none;
            }

            .ul-style li::before {
              content: "\2022";
              color: #04ac9c;
              font-weight: 800;
              display: inline-block; 
              width: 1em;
              margin-left: -1em;
            }

            #notShow{
                margin-bottom: -2rem;
            }
            footer{
                color: white;
                padding: 1rem 1rem 0 1rem;
            }
            .copyright{
              color: white;
            }

            @media only screen and (max-width: 976px) {
                #notShow{
                    display: none;
                }
            }

            @media only screen and (max-width: 567px) {
                #nav-2{
                  margin-top: 0;
                  padding: 10px 0;
                  background-color: #66000000 !important;
                }
                #nav-img{
                  width: 7rem !important;
                  padding-left: 0.5rem;
                }
              	.div-quote{
                   width: 100%;
              	}
                #notShow{
                    display: none;
                }         
                .carousel-inner > .item > img,
                .carousel-inner > .item > a > img {
                    /* width: 1349px !important; */
                    height: 80vh !important;
                    /* width: 95%; */
                    /* margin: auto;
                    object-fit: cover; */
                }
            }
    </style>
</head>
<body>
    <!-- <div class="position-relative"> -->
    <nav class="navbar navbar-dark bg-faded" id="notShow" style="background-color: #04ac9c; opacity: 0.8; z-index: 2; padding: 0.5rem; margin-bottom: 0.5rem;">
        <!-- style="opacity: 0.7; position: fixed; z-index: 100;" -->
        <!-- <a class="navbar-brand">Navbar</a> -->
        <span style="padding-left: 14%; color: #fff;"><i class="fa fa-question-circle text-white" aria-hidden="true"></i> help me buildIT</span>
        <form class="form-inline">
            <span style="font-size: 12px; margin-right: 7rem; color: #fff;"><i class="fa fa-envelope-o text-white" aria-hidden="true"></i> &nbsp;&nbsp;info@builditke.com</span>
            <a href="https://www.youtube.com/channel/UCpou1ljX9x1ehK0U2tKUmDA"><i class="fa fa-youtube-play text-white mr-3" aria-hidden="true"> </i></a>
            <a href="https://twitter.com/BuilditKe"><i class="fa fa-twitter text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/buildITKE"><i class="fa fa-facebook text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/builditke/"><i class="fa fa-instagram text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/builditke"><i class="fa fa-linkedin text-white mr-3" aria-hidden="true"></i></a>

            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-faded" id="nav-2">
        <!-- style="position: fixed; z-index: 100;" -->
        <a class="navbar-brand" href="index.php"><img style="width: 10rem;" id="nav-img" src="images/buildit_logo.png" alt="BuildIt Logo"></a>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 0.5rem;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#"><img style="width: 10rem;" src="images/buildIT.png" alt="BuildIt Logo"></a> -->
            
            <form class="form-inline my-2 my-lg-0">
                <!--<input class="form-control mr-sm-2" style="height: 30px !important; width: 300px !important; border-radius: 10px;" type="search" placeholder="Search" aria-label="Search"> -->
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">WELCOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#section-about">ABOUT buildIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#section-what-we-do">WHAT WE DO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#section-portfolio">THE TEAM</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="./index.php#">HIGHLIGHTS</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#section-contact-us">CONTACT US</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">CONTACT US</a>
                </li> -->
            </ul>                
        </div>
    </nav>
    <section>
      <div class="container mb-5 mt-5">
        <h1 class="build mb-3 mt-3">WELCOME TO THE buildIT PRIVACY HUB</h1>
        <p>We would all like to think that when we give our personal information to businesses, they’ll treat it right, give it the respect it deserves, and cherish it as one of the most valuable assets any business can have at its disposal.</p>
        <p>When it comes to your privacy, we have one mission: to ensure that everything we do is fair, expected, ethical and necessary to benefit the self-employed and small businesses that we represent.</p>
        <p>We want you to fully understand everything we do with your data, so that you can make informed choices about what you provide us with, and what you want us to do with that information. That’s why we’ve created our Privacy Hub. One place, for all of buildIT, where you can find out about when we collect your data, why we need it, what it’s used for, who will used it, for how long, and how you can exercise your rights over it.</p>
        <p>Our Data Governance team are working hard in the background to continuously revitalise and refresh our policies, procedures and drive buildIT to set unrivalled standards of transparency with you. Keep an eye on these pages to see the latest developments in our drive to embrace ethical data usage that benefits everyone.</p>

        <h1 class="build">PRIVACY AND COOKIE NOTICE</h1>
        <h5>Contents: </h5>
        <ol>
            <li>About this Privacy and Cookie Notice</li>
            <li>The data we collect about you</li>
            <li>Cookies and how we use them</li>
            <li>How we use your personal data</li>
            <li>How we share your personal data</li>
            <li>International transfers</li>
            <li>Data security</li>
            <li>Your legal rights</li>
            <li>Further details</li>
        </ol>
        
        <h3 class="build" style="font-size: 26px !important;">1.  About this Notice</h3>
        <p>This Privacy and Cookie Notice provides information on how buildIT collects and processes your personal data when you visit our website or mobile applications.</p>
        
        <h3 class="build" style="font-size: 26px !important;">2.  The data we collect about you</h3>
        <p>We collect your personal data in order to provide and continually improve our products and services.</p>
        <p>We may collect, use, store and transfer the following different kinds of personal data about you:</p>
        <ul class="ul-style">
          	<li>Information you provide to us: We receive and store the information you provide to us including your identity data, contact data, delivery address and financial data.</li>
			<li>Information on your use of our website and/or mobile applications: We automatically collect and store certain types of information regarding your use of buildIT including information about your searches, views, downloads and purchases.</li>
			<li>Mobile: When you download or use apps created by buildIT or our subsidiaries, we may receive information about your location and your mobile device, including a unique identifier for your device. We may use this information to provide you with location-based services, such as advertising, search results, and other personalized content. Most mobile devices allow you to turn off location services. For more information about how to do this, <a href="https://www.consumerreports.org/privacy/how-to-turn-off-location-services-on-your-smartphone-a8219252827/" target="_blank" style="text-decoration: underline; color: #04ac9c;">click here</a>.</li>
			<li>Information from third parties and publicly available sources: We may receive information about you from third parties including our carriers; payment service providers; merchants/brands; and advertising service providers.</li>
        </ul>
        
		<h3 class="build" style="font-size: 26px !important;">3.  What about Cookies?</h3>
        <p>A cookie is a small file of letters and numbers that we put on your computer if you agree.</p>
		<p>Cookies allow us to distinguish you from other users of our website and mobile applications, which helps us to provide you with an enhanced browsing experience. For example, we use cookies for the following purposes:</p>
        <ul class="ul-style">
          	<li>Recognising and counting the number of visitors and to see how visitors move around the site when they are using it (this helps us to improve the way our website works, for example by ensuring that users can find what they are looking for).</li>
			<li>Identifying your preferences and subscriptions e.g., language settings, saved items, items stored in your basket; and</li>
          	<li>Sending you newsletters and commercial/advertising messages tailored to your interests.</li>
        </ul>
        <p>Our approved third parties may also set cookies when you use our marketplace. Third parties include search engines, providers of measurement and analytics services, social media networks, partnered companies and advertising companies.</p>
        
        <h3 class="build" style="font-size: 26px !important;">4.  How we use your personal data</h3>
        <p>We use your personal data to operate, provide, develop and improve the products and services that we offer, including the following:</p>
        <ul class="ul-style">
          	<li>Registering you as a new customer.</li>
			<li>Processing and delivering your orders.</li>
          	<li>Managing your relationship with us.</li>
          	<li>Enabling you to participate in promotions, competitions and surveys.</li>
			<li>Improving our website, applications, products and services</li>
          	<li>Recommending/advertising products or services which may be of interest to you.</li>
          	<li>Complying with our legal obligations, including verifying your identity where necessary.</li>
          	<li>Detecting fraud.</li>
        </ul>
        
        <h3 class="build" style="font-size: 26px !important;">5.  How we share your personal data</h3>
        <p>We may need to share your personal data with third parties for the following purposes:</p>
        <ul class="ul-style">
          	<li>Sale of products and services: In order to deliver your products and services purchased on our marketplace from third parties, we may be required to provide your personal data to such third parties.</li>
			<li>Working with third party service providers: We engage third parties to perform certain functions on our behalf. Examples include fulfilling orders for products or services, delivering packages, analysing data, providing marketing assistance, processing payments, transmitting content, assessing and managing credit risk, and providing customer service.</li>
          	<li>Business transfers: As we continue to develop our business, we might sell or buy other businesses or services. In such transactions, customer information may be transferred together with other business assets.</li>
          	<li>Detecting fraud and abuse: We release account and other personal data to other companies and organizations for fraud protection and credit risk reduction, and to comply with the law.</li>
		</ul>
        <p>When we share your personal data with third parties we:</p>
        <ul class="ul-style">
          	<li>require them to agree to use your data in accordance with the terms of this Privacy and Cookie Notice, our Privacy Policy and in accordance with the law; and</li>
			<li>only permit them to process your personal data for specified purposes and in accordance with our instructions. We do not allow our third-party service providers to use your personal data for their own purposes.</li> 
        </ul>
        
        <h3 class="build" style="font-size: 26px !important;">6.  International transfers</h3>
        <p>We may transfer your personal data to locations in another country, if this is permissible pursuant to applicable laws in your location. There are inherent risks in such transfers.</p>
        <p>In the event of international transfers of your personal data, we shall put in place measures necessary to protect your data, and we shall continue to respect your legal rights pursuant to the terms of this Privacy and Cookie Notice and applicable laws in your location.</p>
        
        <h3 class="build" style="font-size: 26px !important;">7.   Data security</h3>
        <p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorised way, altered or disclosed.</p>
        <p>In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know. They will only process your personal data on our instructions and they are subject to a duty of confidentiality.
        <p>We have put in place procedures to deal with any suspected personal data breach and will notify you and any applicable regulator of a breach where we are legally required to do so.</p>
        
        <h3 class="build" style="font-size: 26px !important;">8.   Your legal rights</h3>
        <p>It is important that the personal data we hold about you is accurate and current. Please keep us informed if your personal data changes during your relationship with us.</p>
        <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to access, correct or erase your personal data, object to or restrict processing of your personal data, and unsubscribe from our emails and newsletters.</p>
        
        <h3 class="build" style="font-size: 26px !important;">9.   Further details</h3>
        <p>If you are looking for more information on how we process your personal data, or you wish to exercise your legal rights in respect of your personal data, please contact legal@builditke.com </p>
      </div>
    </section>

    <footer style="background-color: #04ac9c;">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                <a href="./policy.php" style="color: white;"><h6>Privacy Hub</h6></a>
                </div>
                <div class="col-sm-4">
                    <h6><a href="#" style="color: white;">Terms & Conditions</a></h6>
                </div>
                <div class="col-sm-4">
                    <p><small class="copyright">Created by S-Tec &copy; <?php echo date("Y");?></small>
                </div>
            </div>
            <!-- <div class="text-center pt-5">
            </div> -->
        </div>
    </footer>
</body>
</html>