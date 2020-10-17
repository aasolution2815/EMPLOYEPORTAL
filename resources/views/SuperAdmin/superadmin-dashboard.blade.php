@extends('Layout.app')
@section('content')
<h1>Welcome To SuperAdmin</h1>
<a href="{{url('SuperAdmin/client-creation')}}">Go To Client Creation Page</a>
@endsection
@section('addscriptscontent')
<script>
    $(document).ready(function() {
    });

</script>
@endsection
