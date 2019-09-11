<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Liberty Breeze</title>
    <!-- CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src={{asset('images/logo2.png')}} alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#features">Our Services</a></li>
                        <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll"><a href="#about">About Us</a></li>
                        <li class="scroll"><a href="#services">Principles</a></li> 
                        <li class="scroll"><a href="#meet-team">Team</a></li>
                        <li class="scroll"><a href="#pricing">Plans</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Liberty Breeze Global Systems</span> </h2>
                                    <p> A wave of distinctively devised technological solutions, with a touch of Quality, Convenience and Consistency, all for your business</p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>TAG ALONG...</span></h2>
                                    <p>As We Take You On a Transformation Journey Through This Digital Era</p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/lappy.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Dive deeper...</span></h2>
                                    <p>sdfghjkhgfhjkl</p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>A Glimpse Into The Future...</h2>
                    <p>At Liberty Breeze we value what technology has to offer in respect to presenting each individual`s expectation of a technological future.</p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#">Explore!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">OUR Services</h2>
                <p class="text-center wow fadeInDown">At Liberty Breeze, Our clients' Satisfaction is our utmost priority<br>Its the main reason why we take our time to listen to you and offer you quality Services.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">BULK SMS</h4>
                            <p>Send out messages to a large network of your clients just with a single click</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">USSD DEVELOPMENT</h4>
                            <p>Linking your clients to your application programs through the modern GSM technology, enabling access to your programs from any mobile device.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Software/Website Development</h4>
                            <p>We design and develop World class software and website to well suit and even surpass your client`s expectations</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Mobile Application Development</h4>
                            <p>We develop customized mobile applications to the satisfaction of our clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">OUR PRODUCTS</h2>
                <p class="text-center wow fadeInDown">Get a world class experience when you embrace the use of our systems in your organisation.<br>Extream simplicity of use, convenience and delivery of results,<br>all in the products we channel out.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-area-chart fa-2x"></i>
                        </div>
                        <h3>SYLLABUS MONITOR</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-binoculars fa-2x"></i>
                        </div>
                        <h3>POCKET MONEY</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>MEALS n DEALS</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>LYXY WASH</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-certificate fa-2x"></i>
                        </div>
                        <h3>i-LAUNDRY</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-cogs fa-2x"></i>
                        </div>
                        <h3>i-LAUNCH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->
    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Portfolio</h2>
                <p class="text-center wow fadeInDown"> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores<br>alias consequatur aut perferendis doloribus asperiores repellat</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Perspiciatis</a></li>
                    <li><a href="#" data-filter=".filter1">Voluptatem</a></li>
                    <li><a href="#" data-filter=".filter2">Aperiam</a></li>
                    <li><a href="#" data-filter=".filter3">Inventore</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item filter1">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Nemo enim ipsam</h3>
                            Voluptatem quia voluptas
                            <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2 filter3">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Sed quia consequ</h3>
                            Magni dolores eos qui
                            <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Neque porro</h3>
                            Qui dolorem ipsum quia
                            <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Sed quia non numquam</h3>
                            Eius modi tempora incidunt
                            <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1 filter3">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Labore et dolore</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Quis autem vel</h3>
                            Ut enim ad minima veniam
                            <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1 filter3">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Quis nostrum</h3>
                            Exercitationem ullam
                            <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Corporis suscipit</h3>
                            Nisi ut aliquid ex ea
                            <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">We are dedicated towards providing process automation solutions to organisations and businesses.<br>We understand that customer satisfaction is one of the prime concerns of any organisation. Its why we prioritize timely development of quality, consistent and convenient products for our client`s to serve their customers right</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Sample</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/XH7OShyZ1Ek" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Company Profile</h3>
                    <p>Eventual digitalisation of the globe as a whole is inevitable. Liberty Breeze has positioned itself in line with the demands of this technological transformation.</p>

                    <p>We pride ourselves on living the values of;</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Passion</li>
                                <li><i class="fa fa-check-square"></i> Integrity</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Commitment</li>
                                <li><i class="fa fa-check-square"></i> Embracing Differences</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Download Full Profile</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>PASSION</h4>
                                <p>Striving for excellence through completing tasks with initiative, enthusiasm drive and enjoyment.</p>
                            </div>
                            <div class="item">
                                <h4>INTEGRITY</h4>                               
                                <p>Dealing in an open, fair and ethical manner in all aspects of our activities.</p>
                            </div>
                            <div class="item">
                                <h4>COMMITMENT</h4>                               
                                <p>Greatly devoted in what we do and taking responsibility for our work.</p>
                            </div>
                            <div class="item">
                                <h4>EMBRACING DIFFERENCES</h4>
                                <p>Acknowledging the diverse contributions of all the people we interact with through listening and sharing knowledge to create quality products.</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

     <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">OUR PRINCIPLES</h2>
                <p class="text-center wow fadeInDown"> As a company, we are guided by a code of principles that we hold in high esteem.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">OUR AMBITION</h4>
                                <p>Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex commodi</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">VISION</h4>
                                <p>Reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-power-off"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">OUR CULTURE</h4>
                                <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                       
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>OUR PHILOSOPHY</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">We Know that Greatness in a disruptive era requires bold ambition, curious talent and a culture that believes we are smarter together. We approach every challenge holistically, with best in-class expertise in data, creativity, media, technology, search, social and more.We call this Alchemy. It has the power to build our clients` brands and transform their businesses. And while it may seem like magic, we have got it down to a science.</p>
 
            </div>
        </div>
    </section>  

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">MEET THE TEAM</h2>
                <p class="text-center wow fadeInDown">Highly passionate and specialised personel with top class expertise,<br>putting years of experience into our clients` projects for their total satisfaction</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/evans.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Evans Makamu</h3>
                            <span>Server Side Programmer</span>
                        </div>
                        <p>One of the best in the field, Evans is the keen to detail kind of guy. You will love his skill when it comes to breaking down such a huge system into simple packs.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/peter2.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Peter Mayama</h3>
                            <span>Designer</span>
                        </div>
                        <p>They say creativity is an art which few posses.Peter is one of those few. He has a way of uniquely formulating designs that meet our clients` customized needs.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/dun.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Duncan Mokaya</h3>
                            <span>Client Side Programmer</span>
                        </div>
                        <p>The guy who will make you fall in love with the system on that first glance even before you understand what the system really does. Trust me, he is best at it.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>

            <div class="divider"></div>

            <div class="row">

                <div class="col-sm-4">
                    <h3 class="column-title">The Journey...</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2017</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2018</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2019</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2020</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>An idea to serve the world with lasting digital solutions was conceived. It led to the deliberate action by two campus students then to create the now massive digital solution company</p>
                                
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>Liberty Breeze was officially registered and legally recognised.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>It`s Ground breaking product hit the market. The unique Syllubus Management Information System, whose core aim is to change how academics globally are handled between the parent, student and teacher, changed the usual manual nome of what academics have been for the longest time. Thenks to SYMIS, education has been made alot more convenient and enjoyable. </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>Liberty Breeze looks forwad to spreading it`s wings and covering a number of nations in East and Central Africa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <h3 class="column-title">Extend of Progress</h3>
                    <strong>Product Diversity</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">85%</div>
                    </div>
                    <strong>Service Diversity</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">70%</div>
                    </div>
                    <strong>Cultural Diversity</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="95">90%</div>
                    </div>
                    <strong>Global Coverage</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="78">65%</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Motivation</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Our Loyal always satisfied Clients
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Great work done can only be expressed in the extream satisfactory feedback and testimonials our customers send back to us. This challenges us to improve on our every effort towards maintaining this and growing it to a whole new level.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#meet-team-->     

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Liberty Breeze in Numbers</h2>
                <p class="text-center wow fadeInDown">Numbers have always been essential in pointing out the state of affairs of any organisation just at a glance.</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="2" data-duration="1000"></div>
                        <strong>Projects Underway</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>Finished Products</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="3" data-duration="1000"></div>
                        <strong>Current employees</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="1" data-duration="1000"></div>
                        <strong>The countries represented</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Plans</h2>
                <p class="text-center wow fadeInDown"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $15
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Plan One
                                </div>
                            </li>
                            <li><strong>10</strong> EXCEPTURL</li>
                            <li><strong>120</strong> NIHIL</li>
                            <li><strong>EXPEDITA</strong> DISCTINTO</li>
                            <li>LUSTO ODIMO ATQUE</li>
                            <li><strong>15</strong> RATIONE COLUPTATEM</li>
                            <li><strong>24/7</strong> SAPIENTE</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">GET NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $28
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Plan Two
                                </div>
                            </li>
                            <li><strong>10</strong> EXCEPTURL</li>
                            <li><strong>120</strong> NIHIL</li>
                            <li><strong>EXPEDITA</strong> DISCTINTO</li>
                            <li>LUSTO ODIMO ATQUE</li>
                            <li><strong>15</strong> RATIONE COLUPTATEM</li>
                            <li><strong>24/7</strong> SAPIENTE</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">GET NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $40
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Plan Three
                                </div>
                            </li>
                            <li><strong>10</strong> EXCEPTURL</li>
                            <li><strong>120</strong> NIHIL</li>
                            <li><strong>EXPEDITA</strong> DISCTINTO</li>
                            <li>LUSTO ODIMO ATQUE</li>
                            <li><strong>15</strong> RATIONE COLUPTATEM</li>
                            <li><strong>24/7</strong> SAPIENTE</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">GET NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $58
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Plan Four
                                </div>
                            </li>
                            <li><strong>10</strong> EXCEPTURL</li>
                            <li><strong>120</strong> NIHIL</li>
                            <li><strong>EXPEDITA</strong> DISCTINTO</li>
                            <li>LUSTO ODIMO ATQUE</li>
                            <li><strong>15</strong> RATIONE COLUPTATEM</li>
                            <li><strong>24/7</strong> SAPIENTE</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">GET NOW</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">NOSTRUM ALIQUAM INCIDUNT</h2>
                <p class="text-center wow fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia<br>consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="4.688467" data-longitude="-74.051289"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Your Company, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="contact-us.send.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Your Company.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/mousescroll.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>