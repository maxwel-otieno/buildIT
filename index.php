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
            #about-content
            /*#portfolio-content*/{
                color: #A1ACB3;
            }
            #what-we-do-content{
                color: #A1ACB3;
                padding: 20px 10px;
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
                position: relative;
            }

            h1:after {
                background-color: #04ac9c;
                content: "";
                display: block;
                height: 2px;
                width: 200px;
                position: absolute;
                vertical-align: middle;
                top: 65%;
                z-index: -2;
                
                right: 0;
                /* margin-right: -50%; */
            }

            h1:before {
                background-color: #04ac9c;
                content: "";
                display: inline-block;
                height: 2px;
                width: 200px;
                position: absolute;
                vertical-align: middle;
                top: 65%;
                z-index: -2;
                /* width: 50%; */

                left: 0;
                /* margin-left: -50%; */
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

            #notShow{
                margin-bottom: -2rem;
            }

            /* blockquote */
            blockquote {
                margin: 0;
            }

            blockquote p {
                padding: 15px;
                /* background: #eee; */
                border-radius: 5px;
            }

            blockquote p::before {
                content: '\201C';
            }

            blockquote p::after {
                content: '\201D';
            }

            /* portfolio */
            .portfolio-num{
                color: #04ac9c; font-size: 60px;
                margin-bottom: 0;
            }
            footer{
                color: white;
                padding: 1rem 1rem 0 1rem;
            }            
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 85vh;
                object-fit: cover;
            }
            .img_portfolio{
              width: 50px; margin-right: 1rem;
            }
            #caption_change{
              margin-left: 0px; background-color: #000; opacity: 0.8;
            }
            #caption_change p{
              font-size: 24px;
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
                #caption_change p{
                  font-size: 15px !important;
                }
                .img_portfolio{
                  margin-right: 0.5rem;
                }
            }
    </style>
</head>
<body>
    <!-- <div class="position-relative"> -->
    <nav class="navbar navbar-dark bg-faded" id="notShow" style="background-color: #04ac9c; opacity: 0.8; z-index: 2; padding: 0.5rem; margin-bottom: 0.5rem;">
        <!-- style="opacity: 0.7; position: fixed; z-index: 100;" -->
        <!-- <a class="navbar-brand">Navbar</a> -->
        <span style="padding-left: 14%; color: #fff;"><a href="#section-contact-us" style="text-decoration: none; color: white;"><i class="fa fa-question-circle text-white" aria-hidden="true"></i> help me buildIT</a></span>
        <form class="form-inline">
            <span style="font-size: 12px; margin-right: 7rem; color: #fff;"><i class="fa fa-envelope-o text-white" aria-hidden="true"></i> &nbsp;&nbsp;info@builditke.com</span>
            <a href="https://www.youtube.com/channel/UCpou1ljX9x1ehK0U2tKUmDA" target="_blank"><i class="fa fa-youtube-play text-white mr-3" aria-hidden="true"> </i></a>
            <a href="https://twitter.com/BuilditKe" target="_blank"><i class="fa fa-twitter text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/buildITKE" target="_blank"><i class="fa fa-facebook text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/builditke/" target="_blank"><i class="fa fa-instagram text-white mr-3" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/builditke" target="_blank"><i class="fa fa-linkedin text-white mr-3" aria-hidden="true"></i></a>

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
                <li class="nav-item active">
                    <a class="nav-link" href="#">WELCOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-about">ABOUT buildIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-what-we-do">WHAT WE DO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-portfolio">THE TEAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section-contact-us">CONTACT US</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">CONTACT US</a>
                </li> -->
            </ul>                
        </div>
    </nav>
    <section>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/06 Landing Image.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <!-- <h3>Los Angeles</h3>
                    <p style="color: #04ac9c;">We had such a great time in LA!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="./images/07 Image 2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption" id="caption_change">
                    <!-- <h3>Chicago</h3> -->
                    <p style="font-size: 24px;">We blend I.T (A.Is & recommended systems) with the construction industry to provide services</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="./images/08 Image 3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <!-- <h3>New York</h3>
                    <p style="color: #04ac9c;">We love the Big Apple!</p> -->
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  	</section>
    <!-- about us -->
    <section>
      <div id="section-about">
        <div class="container">
          <!-- <div style="width: 600px; margin: auto; padding-top: 1rem;"><h1 style="font-weight: bold; color: #04ac9c; text-decoration: underline;" class="text-center mt-2 mb-3"><span class="heading">About Us.</span></h1></div> -->
          <div id="about-content" class="text-center pt-3">
            <div style="color: #04ac9c; font-size: 24px;" class="mb-3 mt-2">
              <blockquote>
                <p>Our main aim is to connect our clients with services in the built environment at their convenience while promoting the concept of affordable housing, in line with the Affordable Housing Programme Initiative by the Kenyan Government.</p>
              </blockquote>
            </div>

            <hr style="text-align: center; width: 30%; height: 0.09rem; background-color: #04ac9c;"/>

            <p style="">We also aim to empower professionals in the industry by providing opportunities for them to market their works to draw interests from buyers and people in need of their services and products. We intend to promote the concept of 'Being Your Own Boss' by providing this platform for people in need of it.</p><br>

            <h4 style="color: #04ac9c; text-decoration: underline;">Our Vision</h4>
            <p style="font-family: Jura;">To be the forefront one-stop shop for all your construction needs, with a touch of class.</p><br>

            <h4 style="color: #04ac9c; text-decoration: underline;">Our Mission</h4>
            <p style="font-family: Jura;">We are committed to meeting the needs of our clients. We offer an assortment of premier top-notch, affordable, convenient, client-satisfactory and reliable services in the construction industry supported by sustainable innovations and solutions to various problems.</p><br>

            <h4 style="color: #04ac9c; text-decoration: underline;" class="text-left">Our Objectives</h4>
            <ol class="text-left" style="list-style: number; font-family: Jura;">
              <li class="text-left">Affordability of services and products to our clients.</li>
              <li>Convenience to our clients</li>
              <li>Creative and innovative solutions for our clients.</li>
              <li>Ensure accessibility of our services to our clients.</li>
              <li>Promote environmental sustainability through the built environment.</li>
              <li>Provide job opportunities.</li>
              <li>Provide world-class services to our clients.</li>
            </ol><br>
          </div>    
        </div>
      </div>
    </section>
    
    <!-- what we do -->
    <section>
      <div id="section-what-we-do" class="pt-3 mt-2 mb-3" style="background-color: white; color: #C0c0c0;">
        <div class="container text-center">
          <!-- <div style="width: 600px; margin: auto;"><h1 style="font-weight: bold; color: #04ac9c; text-decoration: underline; z-index: 2;" class="text-center p-2 mt-2 mb-3"><span class="headingWhite">What We Do.</span></h1></div> -->
          <div id="what-we-do-content">
            <div class="div-quote mb-3 mt-2">
              <blockquote>
                <p>Our goal is to offer quality top notch services in terms of consultation, production, and technical expertise through links and collaborations with dedicated members of this industry.</p>
              </blockquote>
            </div>
            <hr style="text-align: center; width: 30%; height: 0.09rem; background-color: #04ac9c;"/>
            <div class="row my-5 py-5">
              <div class="col-lg-1"></div>
              <div class="col-lg-3 text-center" id="notShow">
                <img src="./images/furniture.png" width="200px" alt="buildITFurniture"/>
                <button class="btn btn-block mt-4" style="border-radius: 20px; padding: 7px 15px; background-color: #04ac9c; color: white;">LET'S GO</button>
              </div>
              <div class="col-lg-7" style="border-right: 0.4rem solid #04ac9c; text-align: left !important">
                <h5 style="color: #04ac9c; font-family: text-decoration: underline;"><span class="buildIT">buildIT</span>Furniture</h5>
                Our furniture department deals in a range of furniture that include foldables, desks (dining, office and reception), multi-use, gaming chairs, bespoke, loft beds, pallets to affordable furniture. For the affordable furniture, we research on new materials that can be used to produce quality pieces of furniture at really affordable prices for you, the client. For bespoke furniture, we design custom furniture that's made to the specification of a client.
              </div>
              <div class="col-lg-1"></div>

            </div>

            <div class="row my-5 py-5">
              <div class="col-md-1"></div>
              <div class="col-md-7" style="border-left: 0.4rem solid #04ac9c; text-align: left !important">
                <h5 style="color: #04ac9c; font-family: text-decoration: underline;"><span class="buildIT">buildIT</span>Estates</h5>
                A reliable real estate platform. we offer a space where verified realtors, developers & property owners (BYOR) in affordable housing, extensions, student living, communal living, container projects & portable offices to market their properties for sale and rental purposes. We also manage real estate properties for interested clients.
              </div>
              <div class="col-md-3 text-center" id="notShow">
                <img src="./images/real-estate.png" width="200px" alt="buildITFurniture"/>
                <button class="btn btn-block mt-4" style="border-radius: 20px; padding: 7px 15px; background-color: #04ac9c; color: white;">LET'S GO</button>
              </div>
              <div class="col-md-1"></div>
            </div>

            <div class="row my-5 py-5">
              <div class="col-md-1"></div>
              <div class="col-md-3 text-center" id="notShow">
                <img src="./images/building-materials.png" width="200px" alt="buildITFurniture"/>
                <button class="btn btn-block mt-4" style="border-radius: 20px; padding: 7px 15px; background-color: #04ac9c; color: white;">LET'S GO</button>
              </div>
              <div class="col-md-7" style="border-right: 0.4rem solid #04ac9c; text-align: left !important">
                <h5 style="color: #04ac9c; font-family: text-decoration: underline;"><span class="buildIT">buildIT</span>Materials</h5>
                For sales and marketing services for construction materials, this is your spot. In addition to this, our team conducts material research and documentation to try and come up with new materials that can be used in construction to promote affordability and sustainability.
              </div>
              <div class="col-md-1"></div>
            </div>

            <div class="row my-5 py-5">
              <div class="col-md-1"></div>
              <div class="col-md-7" style="border-left: 0.4rem solid #04ac9c; text-align: left !important">
                <h5 style="color: #04ac9c; font-family: text-decoration: underline;"><span class="buildIT">buildIT</span>Curators</h5>
                We intend to promote and improve curatorial architecture in the country by cataloging historic and monumental buildings, producing docuseries, tracking architectural progression with a goal of developing an architectural museum for the public.
              </div>
              <div class="col-md-3 text-center" id="notShow">
                <img src="./images/curator.png" width="200px" alt="buildITFurniture"/>
                <button class="btn btn-block mt-4" style="border-radius: 20px; padding: 7px 15px; background-color: #04ac9c; color: white;">LET'S GO</button>
              </div>
              <div class="col-md-1"></div>
            </div>

            <div class="row my-5 py-5">
              <div class="col-md-1"></div>
              <div class="col-md-3 text-center" id="notShow">
                <img src="./images/architect.png" width="200px" alt="buildITFurniture"/>
                <button class="btn btn-block mt-4" style="border-radius: 20px; padding: 7px 15px; background-color: #04ac9c; color: white;">LET'S GO</button>
              </div>
              <div class="col-md-7" style="border-right: 0.4rem solid #04ac9c; text-align: left !important">
                <h5 style="color: #04ac9c; font-family: text-decoration: underline;"><span class="buildIT">buildIT</span>Experts</h5>
                We provide a platform for partnered professionals to market their services and job vacancies for potential clients & job seekers respectively.
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Portfolio -->
    <section>
      <div id="section-portfolio" class="pt-4 mt-1">
        <div class="container pt-3">
          <!-- <div style="width: 600px; margin: auto;"><h1 style="font-weight: bold; color: #04ac9c; text-decoration: underline;" class="text-center p-2 mt-2 mb-3"><span class="heading">Team Portfolio.</span></h1></div> -->
          <div id="portfolio-content">
            <div class="row text-center">
              <div class="col-md-4 text-center">
                <!-- <img src="" alt="Philip Wanjeri"> -->
                <div style="width: 100%; height: 300px; background-color: #fff;">
                  <img width="300px" src="./images/buildIT_QR.jpg" alt="Main Image">
                </div>
                <h4 class="mt-2" style="color: #04ac9c;">Philip Wanjeri</h4>
                <h6 style="color: #A1ACB3;">Founder</h6>
              </div>
              <div class="col-md-8">
                <div style="color: #04ac9c; font-size: 24px;" class="mb-5 mt-2">
                    <blockquote>
                      <p>We are well-equipped and dedicated to offer our services, meet your needs and connect you to the relevant service providers where necessary.</p>
                    </blockquote>
                	<hr class="mb-3" style="text-align: center; width: 30%; height: 0.09rem; background-color: #04ac9c; margin-top: -10px;"/>
                </div>                
                
                <div style="color: #04ac9c; font-size: 20px;" class="mt-4">
                  	<a href="https://issuu.com/builditke/docs" target="_blank" style="color: #04ac9c; text-decoration: underline; font-weight: bold;"><img class="img_portfolio" src="images/issuu-logo-2.png">VIEW OUR PORTFOLIO</a>
                </div>
                <div class="row text-center mt-1 pt-3">
                  <div class="col-md-4 pb-4 mb-2">
                    <h2 class="portfolio-num">10</h2>
                    <h6 style="color: #A1ACB3;">Clients Worked With</h6>
                  </div>
                  <div class="col-md-4 pb-4 mb-2">
                    <h2 class="portfolio-num">14</h2>
                    <h6 style="color: #A1ACB3;">Completed Projects</h6>
                  </div>
                  <div class="col-md-4 pb-4 mb-2">
                    <h2 class="portfolio-num">3</h2>
                    <h6 style="color: #A1ACB3;">Ongoing Projects</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact US -->
    <section>
      <div id="section-contact-us" class="pb-3" style="background-color: white;">
        <div class="container pt-3">
          <!-- <div style="width: 600px; margin: auto; margin-bottom: 3rem;"><h1 style="font-weight: bold; color: #04ac9c; text-decoration: underline; z-index: 2;" class="text-center p-2 mt-2 mb-3"><span class="headingWhite">CONTACT US.</span></h1></div> -->
          <div id="contact-us-content" class="mt-4">
            <div class="row pb-4">
              <div class="col-md-6 mb-5 pb-3">
                <h2 style="font-size: 40px; color: #04ac9c;">CONTACT INFO</h2>
                <h6>Give us a call today!</h6>
                <h6 class="text-bold">Meetings on appointment</h6><br>

                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                +254790148251 or +254708489993<br><br>
                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                info@builditke.com<br><br>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                &nbsp; Monday - Friday : 8:00 - 5:00 pm<br><br>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                &nbsp; Saturday : 8:00 - 1:00 pm<br>
              </div>
              <div class="col-md-6">
                <h2 style="font-size: 40px; color: #04ac9c;">SEND US A MESSAGE</h2>
                <form action="./submit.php" method="post">
                  <input type="text" class="form-control" placeholder="Your Name"><br>
                  <input type="text" class="form-control" placeholder="Your Email"><br>
                  <input type="text" class="form-control" placeholder="Phone Number"><br>
                  <textarea name="msg" class="form-control" id="" placeholder="Your Message"></textarea><br>
                  <button class="btn" style="background-color:#04ac9c; color: white;">SEND</button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
                    <p><small class="copyright">Created by S-Tec @<?php echo date("Y");?></small>
                </div>
            </div>
            <!-- <div class="text-center pt-5">
            </div> -->
        </div>
    </footer>
</body>
</html>