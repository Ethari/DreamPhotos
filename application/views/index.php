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
                    <div class = "row">
                        <a href="#" class="btn btn-lg btn-outline btn_upload_pic" style = "margin-top:30px;">
                            <i class="fa fa-upload"></i> Upload your picture!
                        </a>
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

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Authors</h3>
                    <p><a href = "">Kinga Gulewska</a> & <a href = "https://www.linkedin.com/in/mikołaj-szewczyk-19477283/">Mikołaj Szewczyk</a>
                    </p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Our websites</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About DreamPhotos</h3>
                    <p>DreamPhotos is our project at <br><a href = "http://pwr.edu.pl"> Wroclaw University of Technology</a>! </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; DreamPhotos 2017
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login to DreamPhotos</h4>
            </div>
            <div class="modal-body" style = "padding-bottom: 40px;">
                    <div id = "login_fail" class="alert alert-warning alert-dismissable" style = "display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong><br> Invalid username or password.
                    </div>
                    <form class = "login-input" id = "login-form">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" placeholder = "Username" name = "username" class="form-control" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" placeholder = "Password" name = "password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100px;">Login</button>
                    </form>
                    <h6 class = "button-right">Don't have an account? <a href = "" data-toggle="modal" data-target="#registerModal" id = "registerButton" >Register</a></h6>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div id="registerModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register your account</h4>
            </div>
            <div class="modal-body" style = "padding-bottom: 40px;">
                <div id = "register_fail" class="alert alert-warning alert-dismissable" style = "display: none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong><br> This user already exists!.
                </div>
                <form class = "login-input" id = "register-form">
                    <div class="form-group">
                        <label for="username">Username <span class = "star_req">*</span>:</label>
                        <input type="text" placeholder = "Username" name = "username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Name <span class = "star_req">*</span>:</label>
                        <input type="text" placeholder = "Your first name" name = "firstName" class="form-control" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Surname:</label>
                        <input type="text" placeholder = "Your last name" name = "lastName" class="form-control" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class = "star_req">*</span>:</label>
                        <input type="email" placeholder = "Your email address" name = "email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password_one">Password <span class = "star_req">*</span>:</label>
                        <input type="password" placeholder = "**********" name = "password_one" class="form-control" id="password_one" required>
                    </div>
                    <div class="form-group">
                        <label for="password_repeat">Confirm password <span class = "star_req">*</span>:</label>
                        <input type="password" placeholder = "**********" name = "password_repeat" class="form-control" id="password_repeat" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100px;">Register</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>




<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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