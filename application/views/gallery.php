<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Your dream photos
                <small>Download, delete or share!</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <?php

        if(empty($pictures)){
            echo '<div class="row">
                    <div class="col-lg-12 text-center" style = "margin-top:10%; margin-bottom: 20%;">
                        <h3><small>You do not have any pictures yet. Upload something!</small></h3>
                    </div>
                </div>';
        }

        foreach($pictures as $three_pics){
            echo '<div class="row">';
            foreach($three_pics as $pic){
                echo   '<div class="col-md-4 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="'.base_url().'user_uploads/' . $pic["id"] . '.jpg'.'" alt="">
                            </a>
                        </div>';
            }
            echo '</div>';

            echo '<div class="row">';
            foreach($three_pics as $pic){
                echo   '<div class="col-md-4 portfolio-item">
                             <h3>
                                <a href="">'.$pic['date_created'].'</a>
                            </h3>
                             <ul class="list-inline">
                                <li>
                                     <a class="btn btn-block btn-social-new btn-facebook">
                                        <span class="fa fa-facebook"></span> Share on Facebook
                                      </a>
                                </li>
                                <li>
                                     <a class="btn btn-block btn-social-new btn-google">
                                        <span class="fa fa-google"></span> Share by email
                                      </a>
                                </li>
                            </ul>
                        </div>';
            }
            echo '</div>';
        }
    ?>
</div>
