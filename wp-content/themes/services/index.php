<?php get_header(); ?>
<!-- Header END -->

<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-40">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators carousel-indicators-frontend">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-eight active">
                <div class="container">
                    <div class="carousel-position-six text-uppercase text-center">
                        <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown">
                            Expore the power <br/>
                            <span class="carousel-title-normal">of Metronic</span>
                        </h2>
                        <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">This is what you were looking for</p>
                        <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase Now!</a>
                    </div>
                </div>
            </div>

            <!-- Second slide -->
            <div class="item carousel-item-nine">
                <div class="container">
                    <div class="carousel-position-six">
                        <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown">
                            Need a website design?
                        </h2>
                        <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                            This is what you were looking for
                        </p>
                        <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                            Sed est nunc, sagittis at consectetur id.
                        </p>
                        <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase Now!</a>
                    </div>
                </div>
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-ten">
                <div class="container">
                    <div class="carousel-position-six">
                        <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown">
                            Powerful &amp; Clean
                        </h2>
                        <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                            Responsive Website &amp; Admin Theme
                        </p>
                        <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                            Sed est nunc, sagittis at consectetur id.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- END SLIDER -->

<div class="main">
    <div class="container">
        <!-- BEGIN SERVICE BOX -->
        <div class="row service-box margin-bottom-40">

            <?php
            $args = array(
                'post_type' => 'services',
                'category_name'=>'services',
                'posts_per_page' => 3
            );
            $services = new WP_Query( $args ); ?>

            <?php if ( $services->have_posts() ) {
                while ( $services->have_posts() ){
                    $services->the_post();
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-box-heading">
                            <em><i class="<?php echo get_post_meta( get_the_ID(),'font_icon',true ); ?> <?php echo get_post_meta( get_the_ID(),'color_icon',true ); ?>"></i></em>
                            <span><?php the_title(); ?></span>
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                    <?php
                    wp_reset_postdata();
                }
            } else{
                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
            }?>

            <!--<div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-location-arrow blue"></i></em>
                    <span>Multipurpose Template</span>
                </div>
                <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-check red"></i></em>
                    <span>Well Documented</span>
                </div>
                <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-box-heading">
                    <em><i class="fa fa-compress green"></i></em>
                    <span>Responsive Design</span>
                </div>
                <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
            </div>-->
        </div>
        <!-- END SERVICE BOX -->

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

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row mix-block margin-bottom-40">
            <div class="col-md-7">
                <div class="row margin-bottom-40 our-clients">
                    <div class="col-md-12 margin-bottom-40">
                        <h2><a href="javascript:;">Our Clients</a></h2>
                        <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel6-brands">
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_1_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_1.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_2_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_2.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_3_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_3.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_4_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_4.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_5_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_5.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="javascript:;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIALS -->
            <div class="col-md-5 testimonials-v1">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                            <div class="carousel-info">
                                <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img1-small.jpg" alt="">
                                <div class="pull-left">
                                    <span class="testimonials-name">Lina Mars</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                            <div class="carousel-info">
                                <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img5-small.jpg" alt="">
                                <div class="pull-left">
                                    <span class="testimonials-name">Kate Ford</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                            <div class="carousel-info">
                                <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/pages/img/people/img2-small.jpg" alt="">
                                <div class="pull-left">
                                    <span class="testimonials-name">Jake Witson</span>
                                    <span class="testimonials-post">Commercial Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
            <!-- END TESTIMONIALS -->
        </div>
        <!-- END TABS AND TESTIMONIALS -->
    </div>
<?php get_footer(); ?>