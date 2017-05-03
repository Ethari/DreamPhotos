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