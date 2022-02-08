<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bemex.PSD</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-end-bemex/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-end-bemex/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-end-bemex/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-end-bemex/assets/css/responsive.css">
</head>

<body>

    <header>


        <header class="head fix">
            <div class="top "></div>
            <div class="container fix">
                <div class="row fix">

                    <div class="logo-img">
                        <div class="logo">
                            <a href=""><img src="<?php echo base_url(); ?>font-end-bemex/assets/img/logo.png" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li> <a href="#">Home </a>
                                        <ul class="sub-menu">
                                            <li>Home page 1</li>
                                            <li>Home page 2</li>
                                            <li>Home page 3</li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Features </a></li>
                                    <li><a href="#">Pages </a></li>
                                    <li><a href="#">Protfolio </a></li>
                                    <li><a href="#">Blog </a></li>
                                    <li><a href="#">Contact Us </a></li>
                                </ul>
                            </nav>
                            <div class="search-icon">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>

                    </div>
                    <div class="mobile-menu"></div>
                </div>


            </div>


        </header>

    </header>

    <main class="main-body">
        <section class="first-slider">
            <div class="slider-active owl-carousel">
                <!-- <div class="slider">
                    <div class="slider1-img">
                        <a href=""><img src="<?php echo base_url(); ?>font-end-bemex/assets/img/slide_01.jpg" alt="image"></a>
                    </div>
                    <div class="slider-text">
                        <div class="slider-title">
                            <h5>W O R K  H A R D</h5>
                            <h2>DREAM BIG</h2>
                        </div>
                        <a href="">
                            <div class="slider-bottom">GetStarted</div>
                        </a>
                    </div>
                </div> -->

                <?php
                foreach ($result as $value) {
                ?>
                    <div class="slider">
                        <div class="slider1-img">
                            <!-- <a href=""><img src="<?php echo base_url(); ?>font-end-bemex/assets/img/slide_02.jpg" alt="image"></a> -->
                            <a href=""><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                        </div>
                        <div class="slider-text">
                            <div class="slider-title">
                                <h5><?= $value['sub_heading']; ?></h5>
                                <h2><?php echo $value['heading']; ?></h2>
                            </div>
                            <a href="<?php echo $value['button_link']; ?>">
                                <div class="slider-bottom"><?php echo $value['button']; ?></div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- <div class="slider">
                    <div class="slider1-img">
                        <a href=""><img src="<?php echo base_url(); ?>font-end-bemex/assets/img/slide_03.jpg" alt="image"></a>  
                    </div>
                    <div class="slider-text">
                        <div class="slider-title">
                            <h5>W O R K H A R D</h5>
                            <h2>DREAM BIG</h2>
                        </div>
                        <a href="">
                            <div class="slider-bottom">GetStarted</div>
                        </a>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="cta-area">
            <div class="container fix">

                <?php
                foreach ($cta as $value) {
                ?>
                    <div class="row fix">
                        <div class="col-9">
                            <div class="cta-title">
                                <p><?php echo $value['cta_textarea']; ?></p>
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="cta-button">
                            <a href="<?php echo $value['cta_button_link']; ?>"> <?php echo $value['cta_button']; ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>


        <section class="services-area">
            <div class="container fix">
                <div class="row fix">
                    <!-- <div class="col-4">
                        <div class="services-wrapper1">
                            <div class="iconbox-image">
                                <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/iconbox_01.jpg" alt="">
                            </div>
                            <div class="box1">
                                <div class="box1-top">
                                    <div class="area-icon">
                                        <i class="far fa-chart-bar"></i>
                                    </div>
                                    <h2>Top Investment Advisors</h2>
                                </div>
                                <div class="box1-text">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue
                                        ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum
                                        nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                </div>
                                <div class="box1-down">
                                    <div class="plus-icon">
                                        <i class="fas fa-plus-square"></i>
                                    </div>
                                    <a href="">
                                        <h5>Read more</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <?php
                    foreach ($service_one as $value) {
                    ?>
                        <div class="col-4">
                            <div class="services-wrapper1">
                                <div class="iconbox-image">
                                    <!-- <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/iconbox_02.jpg" alt=""> -->
                                    <a href=""><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                                </div>
                                <div class="box1">
                                    <div class="box1-top">
                                        <div class="area-icon">
                                            <i class="<?php echo $value['icon']; ?>"></i>
                                        </div>
                                        <a href=""></a>
                                        <h2><?php echo $value['heading']; ?></h2>
                                        </a>
                                    </div>
                                    <div class="box1-text">
                                        <p><?php echo $value['sub_heading']; ?> </p>
                                    </div>
                                    <div class="box1-down">
                                        <div class="plus-icon">
                                            <i class="fas fa-plus-square"></i>
                                        </div>
                                        <a href="">
                                            <h5>Read more</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- 
                    <div class="col-4">
                        <div class="services-wrapper1">
                            <div class="iconbox-image">
                                <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/iconbox_03.jpg" alt="">
                            </div>
                            <div class="box1">
                                <div class="box1-top">
                                    <div class="area-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <a href="">
                                        <h2>Growth hacking and Success</h2>
                                    </a>
                                </div>
                                <div class="box1-text">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue
                                        ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum
                                        nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                </div>
                                <div class="box1-down">
                                    <div class="plus-icon">
                                        <i class="fas fa-plus-square"></i>
                                    </div>
                                    <a href="">
                                        <h5>Read more</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="services-area2">
            <div class="container fix">

                <div class="text">
                    <h2><?php echo $top_heading2; ?></h2>
                    <!-- <h2>WE ARE BEMAX</h2> -->
                </div>
                <div class="row fix">
                    <!-- <div class="col-4">
                        <div class="item">
                            <div class="item_icon">
                                <a href=""> <i class="far fa-laptop"></i></a>
                            </div>
                            <div class="item-text">
                                <a href="">
                                    <h5>Responsive Design</h5>
                                </a>

                                <p>Vestibulum non diam quis nisl dignissim posuere a vulputate urna nunc velit </p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-4">
                        <div class="item">
                            <div class="item_icon">
                                <a href=""><i class="far fa-gem"></i></a>
                            </div>
                            <div class="item-text">
                                <a href="">
                                    <h5>Very Easy Customizie</h5>
                                </a>

                                <p>Etiam mollis dui diam, eget accumsan neque consectetur quis </p>
                            </div>
                        </div>
                    </div> -->
                    <?php
                    foreach ($service_two as $value) {
                    ?>
                        <div class="col-4">
                            <div class="item">
                                <div class="item_icon">
                                    <a href="<?php echo $value['icon']; ?>"> <i class="<?php echo $value['icon']; ?>"></i></a>
                                </div>
                                <div class="item-text">
                                    <a href="<?php echo $value['heading_link']; ?>">
                                        <h5><?php echo $value['heading']; ?></h5>
                                    </a>

                                    <p><?php echo $value['sub_heading']; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    <!-- 
                    <div class="col-4">
                        <div class="item">
                            <div class="item_icon">
                                <a href=""> <i class="fas fa-mobile-alt"></i></a>
                            </div>
                            <div class="item-text">
                                <a href="">
                                    <h5>Moblie Ready</h5>
                                </a>

                                <p>Donec at consequat tortor. Etiam ut ipsum sit amet diam pulvinar efficitur quis vitae
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="item">
                            <div class="item_icon">
                                <a href=""> <i class="fas fa-pen"></i></a>
                            </div>
                            <div class="item-text">
                                <a href="">
                                    <h5>Modern Style</h5>
                                </a>

                                <p>Suspendisse eu congue mauris. Class aptent taciti sociosqu ad litora torquent</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="item">
                            <div class="item_icon">
                                <a href=""> <i class="fad fa-comments-dollar"></i></a>
                            </div>
                            <div class="item-text">
                                <a href=""></a>
                                <h5>Awesome Support</h5>
                                </a>

                                <p>Curabitur laoreet auctor sem, sodales fermentum purus rutrum in </p>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>

        </section>
        <section class="services-area3">
            <div class="container fix">
                <div class="area3-text">
                    <h2><?php echo $top_heading3 ?></h2>
                    <!-- <h2>LATEST PROJECT</h2> -->
                </div>
                <div class="main-slider">
                    <div class="row fix">
                        <div class="latest-slider-actives owl-carousel">

                            <?php
                            foreach ($service_three as $value) {
                            ?>
                                <div class="slider-box">
                                    <div class="slider-img">
                                        <a href=""><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>

                                        <!-- <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_01.jpg" alt=""> -->
                                    </div>
                                    <div class="slider-paragraph">
                                        <a href="<?php echo $value['heading_link'] ?>">
                                            <h3><?php echo $value['heading'] ?></h3>
                                        </a>

                                        <a href="<?php echo $value['sub_heading_link'] ?>">
                                            <p><?php echo $value['sub_heading'] ?></p>
                                        </a>
                                        </a>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                            <!-- <div class="slider-box">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_01.jpg" alt="">
                                </div>
                                <div class="slider-paragraph">
                                    <a href="">
                                        <a href="">
                                            <h3>Business Growth Solutions</h3>
                                        </a>
                                    </a>
                                    <a href="">

                                        <p>Finance, Marketing</p>
                                    </a>
                                    </a>
                                </div>
                            </div>

                            <div class="slider-box">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_02.jpg" alt="">
                                </div>
                                <div class="slider-paragraph">
                                    <a href="">
                                        <a href="">
                                            <h3>Business Growth Solutions</h3>
                                        </a>
                                    </a>
                                    <a href="">
                                        <a href="">
                                            <p>Finance, Marketing</p>
                                        </a>
                                    </a>
                                </div>
                            </div>

                            <div class="slider-box">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_03.jpg" alt="">
                                </div>
                                <div class="slider-paragraph">
                                    <a href="">
                                        <a href="">
                                            <h3>Business Growth Solutions</h3>
                                        </a>
                                    </a>
                                    <a href="">
                                        <a href="">
                                            <p>Finance, Marketing</p>
                                        </a>
                                    </a>
                                </div>
                            </div>

                            <div class="slider-box">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_04.jpg" alt="">
                                </div>
                                <div class="slider-paragraph">
                                    <a href="">
                                        <a href="">
                                            <h3>Business Growth Solutions</h3>
                                        </a>
                                    </a>
                                    <a href="">
                                        <a href="">
                                            <p>Finance, Marketing</p>
                                        </a>
                                    </a>
                                </div>
                            </div>

                            <div class="slider-box">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/project_02.jpg" alt="">
                                </div>
                                <div class="slider-paragraph">
                                    <a href="">
                                        <a href="">
                                            <h3>Business Growth Solutions</h3>
                                        </a>
                                    </a>
                                    <a href="">
                                        <a href="">
                                            <p>Finance, Marketing</p>
                                        </a>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services-area4">
            <div class="container fix">
                <div class="area4-text">
                    <h2><?php echo $top_heading4 ?></h2>
                </div>
                <div class="row fix">
                    <div class="col-6">
                        <div class="video-box">
                            <div class="video-img">
                                <a href=""><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $image4 ?>" alt="image"></a>
                            </div>
                            <div class="video-icon">
                                <a href="<?php echo $image_link4 ?>"> <i class="fal fa-play-circle"></i></a>
                            </div>
                        </div>

                    </div>
                    <?php
                    foreach ($service_fourth as $value) {
                    ?>
                        <div class="col-6">
                            <div class="area4">
                                <div class="area4-icon-and-text">
                                    <div class="textbox-icon">
                                        <i class="<?php echo $value['icon'] ?>"></i>
                                    </div>
                                    <a href="<?php echo $value['heading_link'] ?>">
                                        <h5><?php echo $value['heading'] ?></h5>
                                    </a>
                                </div>
                                <div class="area4-textbox">

                                    <p><?php echo $value['sub_heading'] ?> </p>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    <!-- <div class="col-6">
                        <div class="area4">
                            <div class="area4-icon-and-text">
                                <div class="textbox-icon">
                                    <i class="far fa-gem"></i>
                                </div>
                                <a href="">
                                    <h5>Flexible Layouts</h5>
                                </a>
                            </div>
                            <div class="area4-textbox">

                                <p>Nam orci metus, varius at nisl at, tempor facilisis magna. Ut maximus felis et
                                    tincidunt lacinia. Nulla malesuada ipsum at magna condimentum pharetra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="area4">
                            <div class="area4-icon-and-text">
                                <div class="textbox-icon">
                                    <i class="fas fa-suitcase"></i>
                                </div>
                                <a href="">
                                    <h5>Easy to Use </h5>
                                </a>
                            </div>

                            <div class="area4-textbox">

                                <p>Fusce viverra risus diam, in luctus nulla porta vel. Etiam nunc lorem, dapibus id
                                    augue vitae, lacinia pharetra eros. Fusce ac egestas purus, non porta est. </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="services_area5">
            <div class="container fix">
                <div class="row fix">
                    <?php
                    foreach ($service_fifth as $value) {
                    ?>
                        <div class="col-6">
                            <div class="area5-text">
                                <h2><?php echo $value['heading'] ?></h2>
                                <p><?php echo $value['sub_heading'] ?></p>
                            </div>
                            <div class="area5-button">
                                <a href="<?php echo $value['button_link'] ?>"><?php echo $value['button'] ?></a>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="area-img">
                                <a href="#"><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="services-area6">
            <div class="container fix">
                <div class="row fix">
                    <div class="col-6">
                        <div class="left-text">
                            <h5><?php echo $top_heading5 ?></h5>
                        </div>
                        <div class="latest-blog-slider-actives owl-carousel">

                            <?php
                            foreach ($service_sixth_left as $value) {
                            ?>
                                <div class="latest-blog">
                                    <div class="services-wrapper2">
                                        <div class="area6-leftbox">
                                            <a href="#"><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                                        </div>
                                        <div class="box-text">
                                            <p><?php echo $value['date'] ?></p>
                                        </div>
                                    </div>

                                    <div class="area6-text">
                                        <div class="left-text2">
                                            <a href="<?php echo $value['heading_link'] ?>">
                                                <h3><?php echo $value['heading'] ?></h3>
                                                <!-- <h3>10 Tips for a Business Strong Start </h3> -->
                                            </a>
                                            <p><?php echo $value['textarea'] ?></p>
                                        </div>
                                        <div class="left-text3">
                                            <div class="left-icon">

                                            </div>
                                            <a href="<?php echo $value['sub_heading_link'] ?>">
                                                <p><i class="fad fa-tags"></i><?php echo $value['sub_heading'] ?><span class="icon"><i class="fas fa-plus-square">
                                                        </i><?php echo $value['plus'] ?></span></p>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <!-- <div class="latest-blog">
                                <div class="services-wrapper2">
                                    <div class="area6-leftbox">
                                        <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/blog_02.jpg" alt="">
                                    </div>
                                    <div class="box-text">
                                        <p>April 7 ,2021</p>
                                    </div>
                                </div>

                                <div class="area6-text">
                                    <div class="left-text2">
                                        <a href="">
                                            <h3>Help your business to success </h3>
                                        </a>
                                        <p>Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at
                                            viverra
                                            sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                    </div>
                                    <div class="left-text3">
                                        <div class="left-icon">

                                        </div>
                                        <a href="">
                                            <p>Development,Maketing <span class="icon"><i class="fas fa-plus-square">
                                                    </i>Read
                                                    more</span></p>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            <div class="latest-blog">
                                <div class="services-wrapper2">
                                    <div class="area6-leftbox">
                                        <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/blog_03.jpg" alt="">
                                    </div>
                                    <div class="box-text">
                                        <p>April 7 ,2021</p>
                                    </div>
                                </div>

                                <div class="area6-text">
                                    <div class="left-text2">
                                        <a href="">
                                            <h3>How to find work you love</h3>
                                        </a>
                                        <p>Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at
                                            viverra
                                            sem. Mauris vitae pellentesque nisi, sit amet viverra orci.</p>
                                    </div>
                                    <div class="left-text3">
                                        <div class="left-icon">

                                        </div>
                                        <a href="">
                                            <p>Development,Maketing <span class="icon"><i class="fas fa-plus-square">
                                                    </i>Read
                                                    more</span></p>
                                        </a>


                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>



                    <div class="col-6">
                        <div class="area6-text2">
                            <div class="right-text">
                                <h5><?php echo $top_heading6 ?></h5>
                            </div>
                            <div class="testimonial-slider-active owl-carousel">

                                <?php
                                foreach ($service_sixth_right as $value) {
                                ?>
                                    <div class="testimonials">
                                        <div class="testimonials-peragraph">
                                            <i><?php echo $value['textarea'] ?></i>
                                        </div>
                                        <div class="right-text2-icon">
                                            <div class="right-icon">
                                                <a href="#"><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                                            </div>
                                            <div class="right-text2">
                                                <a href="<?php echo $value['heading_link'] ?>">
                                                    <h2><?php echo $value['heading'] ?></h2>
                                                </a>

                                                <p><?php echo $value['sub_heading'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="testimonials">
                                    <div class="testimonials-peragraph">
                                        <i>Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu,
                                            fermentum lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante
                                            ipsum primis in faucibus. Etiam tincidunt odio dolor</i>
                                    </div>
                                    <div class="right-text2-icon">
                                        <div class="right-icon">
                                            <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/user_02.png" alt="">
                                        </div>
                                        <div class="right-text2">
                                            <a href="">
                                                <h2>JOHN DOE</h2>
                                            </a>

                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-area7">
            <div class="container fix">
                <div class="row fix">
                    <div class="box">
                        <div class="box-slider-actives owl-carousel">
                            <?php
                            foreach ($service_seven as $value) {
                            ?>
                                <div class="slide-box">
                                <a href="#"><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                                </div>
                                <!-- <div class="slide-box">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/partner_02.png" alt="">
                                </div>
                                <div class="slide-box">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/partner_03.png" alt="">
                                </div>
                                <div class="slide-box">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/partner_04.png" alt="">
                                </div>
                                <div class="slide-box">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/partner_05.png" alt="">
                                </div>
                                <div class="slide-box">
                                    <img src="<?php echo base_url(); ?>font-end-bemex/assets/img/partner_06.png" alt="">
                                </div> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-area8">
            <div class="container fix">
                <div class="row fix">

                    <?php
                    foreach ($service_eight_step1 as $value) {
                    ?>
                        <div class="col-3">
                            <div class="logo">
                                <a href="<?php echo $value['image_link'] ?>"><img src="<?php echo base_url('backend-dashboard-master/uploads/'); ?><?php echo $value['image']; ?>" alt="image"></a>
                            </div>
                            <div class="area1-text">

                                <p><?php echo $value['textarea'] ?></p>
                            </div>
                            <div class="all-icon">
                                <div class="area8-icon">
                                    <a href="<?php echo $value['f_icon_link'] ?>" <i class="<?php echo $value['f_icon'] ?>"></i>
                                    </a>
                                </div>
                                <div class="area8-icon">
                                    <a href="<?php echo $value['twiter_icon_link'] ?>" <i class="<?php echo $value['twiter_icon'] ?>"></i>
                                    </a>
                                </div>
                                <div class="area8-icon">
                                    <a href="<?php echo $value['google_icon_link'] ?>" <i class="<?php echo $value['google_icon'] ?>"></i>
                                    </a>
                                </div>
                                <div class="area8-icon">
                                    <a href="<?php echo $value['in_icon_link'] ?>" <i class="<?php echo $value['in_icon'] ?>"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    foreach ($service_eight_step2 as $value) {
                    ?>
                        <div class="col-3">
                            <div class="area2-text">
                                <div class="title">
                                    <p><?php echo $value['heading'] ?></p>
                                </div>
                                <div class="list-style">
                                    <p>
                                        <a href="<?php echo $value['step_one_link'] ?>"><?php echo $value['step_one'] ?></a>
                                    </p>
                                    <p>
                                        <a href="<?php echo $value['step_two_link'] ?>"><?php echo $value['step_two'] ?></a>
                                    </p>
                                    <p>
                                        <a href="<?php echo $value['step_three_link'] ?>"><?php echo $value['step_three'] ?></a>
                                    </p>
                                    <p>
                                        <a href="?php echo $value['step_four_link'] ?>"><?php echo $value['step_four'] ?></a>
                                    </p>
                                    <p>
                                        <a href="<?php echo $value['step_five_link'] ?>"><?php echo $value['step_five'] ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    foreach ($service_eight_step3 as $value) {
                    ?>
                        <div class="col-3">
                            <div class="area2-text">
                                <div class="title">
                                    <p><?php echo $value['heading'] ?></p>
                                </div>
                                <p><?php echo $value['address'] ?></p>
                                <p><?php echo $value['phone'] ?></p>
                                <p><?php echo $value['fax'] ?></p>
                                <p><?php echo $value['email'] ?></p>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    foreach ($service_eight_step4 as $value) {
                    ?>
                        <div class="col-3">
                            <div class="area2-text">
                                <div class="title">
                                    <p><?php echo $value['heading'] ?></p>
                                </div>
                                <p><?php echo $value['textarea'] ?></p>
                            </div>
                            <form class="footer-form">
                                <input type="text" placeholder="<?php echo $value['youremail'] ?>">
                                <input type="submit" value="<?php echo $value['button'] ?>">
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </section>
        <section class="services-area9">

        </section>
        <section class="services-area10">
            <div class="container fix">
                <div class="footer">
                    <p>Copyright © 2021 Designed by <a href="https://www.linkedin.com/in/mizanur-rahman-463304/">MizanurRahman.</a> All rights
                        reserved</p>
                </div>
            </div>
        </section>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="<?php echo base_url(); ?>font-end-bemex/assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>font-end-bemex/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>font-end-bemex/assets/js/jquery.meanmenu.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>font-end-bemex/assets/js/active.js"></script>

</body>

</html>