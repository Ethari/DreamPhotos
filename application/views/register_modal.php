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
