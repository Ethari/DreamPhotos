<!-- Header -->
<header>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <div class="row">
                        <h1 class="name">
                            <?php
                            if($this->session->has_userdata('name')){
                                echo "Hello, " . $this->session->userdata('name') . "!";
                            } else{
                                echo "Dream Photos";
                            }
                            ?>
                        </h1>
                        <hr class="star-light">
                        <span class="skills">Transform your photos into a dream-like state using a deep learning algorithm!</span>
                    </div>
                    <div class = "row text-center">
                        <button id = "upload_button" class="btn btn-lg btn-outline btn_upload_pic" style = "margin-top:30px;">
                            <i class="fa fa-upload"></i> Upload your picture!
                        </button>
                        <form action="<?php echo base_url(); ?>uploader" id = "dropzone" class="dropzone" style = "width: 50%; margin: 0 auto; margin-top: 3%; display: none;" id="demo-upload">
                            <div class="dz-message" style = 'color: black;'>
                                Drop your picture here!<br>
                            </div>
                        </form>
                        <button id = "process_image" class="btn btn-lg btn-outline btn_upload_pic" style = "margin-top: 3%; display: none; " data-toggle="modal" data-target="#photoModal">
                            <i class="fa fa-picture-o"></i> Convert your image!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Portfolio</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url("/assets/pictures/example.jpeg"); ?>" class="img-responsive" alt="Cabin">                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About DreamPhotos</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p> DreamPhotos is a computer vision program created by Google which uses a convolutional neural network to find and enhance patterns in images via algorithmic pareidolia, thus creating a dream-like hallucinogenic appearance in the deliberately over-processed images.</p>
            </div>
            <div class="col-lg-4">
                <p>This website allows everyone to create their own dreamy pictures! Upload your photo, see the results and share them with your friends! You can create an account to see your past uploads or you can start using the website straight away</p>
            </div>
        </div>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="converted_picture" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
