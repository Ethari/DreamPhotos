<div id="page-wrapper">

    <div id="newCourseModal" class="modal fade"role="dialog">
        <div class="modal-dialog" style = "margin-top: 10%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New course</h4>
                </div>
                <div class="modal-body">
                    <form id = "new_course_form">
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter the name of the course.">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <div id = "courses_list" class="container">

        <button id = "new_course" class="btn btn-primary button-right" data-toggle="modal" data-target="#newCourseModal" style = "margin: 20px;">New course</button>
        <h2>Your courses</h2>
        <table class="table table-hover ">
            <thead>
            <tr>
                <th>Name</th>
                <th>Number of questions</th>
                <th>Number of exams</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($courses as $course){
                echo "
                    <tr>
                        <td>".$course['name']."</td>
                        <td>271</td>
                        <td>12</td>
                    </tr>
                ";}
            ?>

            </tbody>
        </table>
    </div>
</div>