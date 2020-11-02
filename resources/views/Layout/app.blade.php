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
    @include('Navbar.navbar')


</body>
@include('Links.scripts')
@yield('addscriptscontent')
</html>
