<!-- Navigation -->

<?php
if($this->session->has_userdata('username')){
    echo "NICE";
}
?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Dream Photos</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="">
                    <a href="#home">Home</a>
                </li>
                <li class="">
                    <a href="#info">About</a>
                </li>
                <li class="">
                    <a href="#contact">Contact</a>
                </li>

                <?php
                    if($this->session->has_userdata('username')){
                        echo '<li class="">
                                <a href = "" id="profile">Your profile</a>
                              </li>';
                        echo '<li class="">
                                <a href = "" id="logout">Logout</a>
                              </li>';
                    } else{
                        echo '<li class="">
                                 <a href = "" id="#login" data-toggle="modal" data-target="#loginModal">Login</a>
                              </li>';
                    }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>