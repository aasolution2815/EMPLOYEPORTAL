@extends('Layout.app')
@section('content')
<h1>Welcome To Client Creation Part</h1>
<form action="#" id="client_form">
    <button id="btn_id" onclick="addClient(event)">Submit</button>
</form>
@endsection
@section('addscriptscontent')
<script>
    function addClient(params) {
        alert('Welcome');
    }
</script>
@endsection
