<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>EMS-Employee Mangement System</title>
    @include('Links.links')

</head>
<body>
    <form action="#" id="login_form">
        <input type="text" id="username" name="username" required="" data-parsley-trigger="blur"
            data-parsley-errors-container=".usernameerror">
        <span class="usernameerror"></span>
        <input type="text" id="user_password" name="user_password" required="" data-parsley-trigger="blur"
            data-parsley-errors-container=".user_password">
        <span class="user_password"></span>
        <button id="btn_id" onclick="authentication(event)">Submit</button>
    </form>
</body>
@include('Links.scripts')
<script>
    var base_url = {!!json_encode(url('/')) !!};
    $(document).ready(function() {
        $('#login_form').parsley();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function (x, status, error) {
                if (x.status == 403) {
                    alert("Sorry, your session has expired. Please login again to continue");
                    window.location.href ="/";
                } else {
                    alert("An error occurred: " + status + "nError: " + error);
                }
            }
        });
    });
    function authentication(event) {

        // $('#loading-image').show();
        // Validate all input fields.
        var isValid = true;
        $('#login_form').each( function() {
            if ($(this).parsley().validate() !== true) isValid = false;
        });
        if (isValid) {
            event.preventDefault();
            var username = $("#username").val();
            var user_password = $("#user_password").val();
            $.ajax({
                url: base_url  +  '/checklogin',
                type: 'POST',
                data: {
                    username:username,
                    userPassword:user_password
                },
                success: function(data) {
                    var response = data.trim();
                    // console.log(data);
                    if (response == 'NotFound') {
                        alert('Email Id / Username Not Found');
                    } else if (response == 'NotMatch') {
                        alert('Password DoesNot Match');
                    } else if (response == 'Error') {
                        alert('Your Session Expier Please Login Again');

                        if (ROLEID == "1") {
                            window.location.href ="SuperAdmin/dashboard";
                        } else {
                            alert('dfjdfd');
                        }
                    } else {
                        var ROLEID = response;
                        if (ROLEID == 1) {
                            window.location.href ="SuperAdmin/dashboard";
                        } else {
                            alert('dfjdfd');
                        }
                    }

                },
            });
        }

    }
</script>
</html>
