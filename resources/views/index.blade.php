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
    function authentication(event) {
        var isValid = true;
        $('#login_form').each( function() {
            if ($(this).parsley().validate() !== true) isValid = false;
        });
        if (isValid) {
            window.location.href ="SuperAdmin/dashboard";
            event.preventDefault();
        }
    }
</script>
</html>
