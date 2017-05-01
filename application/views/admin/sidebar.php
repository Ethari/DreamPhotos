<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li id = "home" class = "<?php echo ($page == 'home') ? "sidebar_active" : ""; ?>">
                <a href=""><i class="fa fa-dashboard fa-fw "></i> Home</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Exams <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li id = "create_exam" <?php ($page == 'exam_create') ? "sidebar_active" : ""; ?>>
                        <a href="">Create</a>
                    </li>
                    <li id = "browse_exam" <?php ($page == 'exam_browse') ? "sidebar_active" : ""; ?>>
                        <a href="">Browse</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Questions <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li id = "question_create" <?php ($page == 'home') ? "question_create" : ""; ?>>
                        <a href="">Create</a>
                    </li>
                    <li id = "question_create" <?php ($page == 'home') ? "question_browse" : ""; ?>>
                        <a href="">Browse</a>
                    </li>
                </ul>
            </li>
            <li>
                <a id = "courses"><i class="fa fa-sitemap fa-fw"></i> Courses</a>
            </li>
        </ul>
    </div>
</div>