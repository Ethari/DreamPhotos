$(function() {

    $("#logout").click(function() {
        var request = $.ajax({
            url: BASE_URL + "login/logout"
        });

        request.done(function (response, textStatus, jqXHR) {
            console.log("OK");
            location.reload();
        });

        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // log the error to the console
            console.error(
                "The following error occured: " + textStatus, errorThrown);
        });
    });

    $("#registerButton").click(function() {
        $('#loginModal').modal('toggle');
    });

    // validate signup form on keyup and submit
    $("#login-form").validate({
        submitHandler: function (form) {
            // setup some local variables
            var $form = $(form);
            var serializedData = $form.serialize();

            var request = $.ajax({
                url: BASE_URL + "login",
                type: "post",
                data: serializedData
            });

            request.done(function (response, textStatus, jqXHR) {
                if(response == "true"){
                    location.reload();
                    $('#loginModal').modal('toggle');
                } else{
                    $('#login_fail').show();
                }
            });

            // callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown) {
                // log the error to the console
                console.error(
                    "The following error occured: " + textStatus, errorThrown);
            });
        }
    });

    $("#register-form").validate({
        rules: {
            password: "required",
            password_repeat: {
                equalTo: "#password_one"
            },
            username: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            password_repeat: {
                equalTo: "Passwords must be the same!"
            }
        },
        submitHandler: function (form) {
            var $form = $(form);
            var serializedData = $form.serialize();

            var request = $.ajax({
                url: BASE_URL + "login/register",
                type: "post",
                data: serializedData
            });

            request.done(function (response, textStatus, jqXHR) {
                if(response == "true"){
                    location.reload();
                    $('#registerFail').modal('toggle');
                } else{
                    $('#register_fail').show();
                }
            });

            // callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown) {
                // log the error to the console
                alert(
                    "The following error occured: " + textStatus, errorThrown);
            });
        }
    });

    $("#upload_button").click(function() {
        $("#dropzone").toggle();
    });

    $("#process_image").click(function() {
        $("#process").toggle();
    });

    Dropzone.options.dropzone = {
        init: function() {
            this.on("addedfile", function() {
                if (this.files[1]!=null){
                    this.removeFile(this.files[0]);
                }
            });
            this.on("success", function(file, response, myEvent) {
                window.setTimeout(function() {
                    //window.location.href = BASE_URL + "user_uploads/" + response + ".jpg";
                    $('#process_image').show();
                    $('#process_image').attr('img_id', response);
                }, 1000);
            });
        }
    };



    $('#photoModal').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var img_id = $('#process_image').attr('img_id');

        //populate the textbox
        $(e.currentTarget).find('img[name="uploaded_image"]').attr('src', BASE_URL + "user_uploads/" + img_id + ".jpg");
    });

});