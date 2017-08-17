<?php
/*
 Template Name: Portfolio
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Portfolio</a></li>
            <li class="active">Portfolio Item</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Portfolio Item</h1>
                <div class="content-page">
                    <div class="row margin-bottom-30">
                        <!-- BEGIN CAROUSEL -->
                        <div class="col-md-5 front-carousel">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg">
                                        <div class="carousel-caption">
                                            <p>Excepturi sint occaecati cupiditate non provident</p>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg">
                                        <div class="carousel-caption">
                                            <p>Ducimus qui blanditiis praesentium voluptatum</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg">
                                        <div class="carousel-caption">
                                            <p>Ut non libero consectetur adipiscing elit magna</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel nav -->
                                <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a data-slide="next" href="#myCarousel" class="carousel-control right">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->

                        <!-- BEGIN PORTFOLIO DESCRIPTION -->
                        <div class="col-md-7">
                            <h2>Quis tempor incididunt</h2>
                            <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa quis tempor incididunt ut et dolore et dolorum fuga. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
                            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
                            <br>
                            <div class="row front-lists-v2 margin-bottom-15">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-html5"></i> HTML5/CSS3</li>
                                        <li><i class="fa fa-bell"></i> Web Deisgn</li>
                                        <li><i class="fa fa-globe"></i> Web Development</li>
                                        <li><i class="fa fa-shopping-cart"></i> Shoping Cart</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-dropbox"></i> Free Storage</li>
                                        <li><i class="fa fa-cloud"></i> Cloud Hosting</li>
                                        <li><i class="fa fa-comments"></i> Free Support</li>
                                        <li><i class="fa fa-star"></i> Awesome UI</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="javascript:;"> VISIT THE PROJECT</a>
                        </div>
                        <!-- END PORTFOLIO DESCRIPTION -->
                    </div>

                    <!-- BEGIN RECENT WORKS -->
                    <div class="row recent-work margin-bottom-40">
                        <div class="col-md-3">
                            <h2><a href="portfolio.html">Recent Works</a></h2>
                            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
                        </div>
                        <div class="col-md-9">
                            <div class="owl-carousel owl-carousel3">
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                                <div class="recent-work-item">
                                    <em>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                                        <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                                    </em>
                                    <a class="recent-work-description" href="javascript:;">
                                        <strong>Amazing Project</strong>
                                        <b>Agenda corp.</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT WORKS -->

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
    </div>
<?php get_footer(); ?>