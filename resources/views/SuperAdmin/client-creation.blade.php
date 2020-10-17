@extends('Layout.app')
@section('content')
<h1>Welcome To Client Creation Part</h1>
<form action="#" id="client_form">
    <input type="text" id="company_name" placeholder="Company Name" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".companyname"  ><br><br>
    <span class="companyname"></span>

    <input type="text" id="admin_name" placeholder="Admin Name" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".adminname"><br><br>
    <span class="adminname"></span>

    <input type="email" id="admin_emailid" placeholder="Admin Email Id" name="email" autocomplete="nope" required="" data-parsley-trigger="blur" data-parsley-errors-container=".errorsemail" onkeyup="checkemailId()"data-parsley-required-message="Required" ><br><br>

    <span class="errorsemail"></span>
    <span id="present_or_not"></span>

    <input type="password" id="user_password" placeholder="Password" required="" data-parsley-trigger="blur" data-parsley-required-message="Required"  data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[@#_-]).{6,}" data-parsley-pattern-message="Must Contain 6 Charcter Atlest 1 Uper Case ,Lower Case, Number, and Special Charter @,#,_,-" data-parsley-errors-container=".userpass"><br><br>
    <span class="userpass"></span>

    <input type="text" id="empcode_format" placeholder="Emplyoye Code Formate" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".empformate" ><br><br>
    <span class="empformate"></span>

    <input type="text" id="client_prefix" placeholder="Client Prefix" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".prefix" ><br><br>
    <span class="prefix"></span>

    <input type="text" id="contatct_info" placeholder="Contact Info" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".contactinfo" ><br><br>
    <span class="contactinfo"></span>

    <input type="number" id="user_lmit" placeholder="User Lmit" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".userlmit" ><br><br>
    <span class="userlmit"></span>

    <select name="no_of_days" id="no_of_days" onchange="checktype(this)" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".noofdays" >
        <option value="">Select Type</option>
        <option value="Days">Days</option>
        <option value="Month">Month</option>
        <option value="Year">Year</option>
    </select><br><br>
    <span class="noofdays"></span>

    <input type="number" placeholder="No Of Days / Month / Year" id="expiry_date" disabled
        onkeyup="getDate(this)" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-errors-container=".expirydate"><br><br>
        <span class="expirydate"></span>

    <label for="expiry_date">
        <p id="show_date">DD/MM/YYYY</p>
    </label>

    <button id="btn_id" onclick="addClient(event)">Submit</button>
</form>
@endsection
@section('addscriptscontent')
<script>
    var vailidemail = false ;
    var vailidusername = false ;
    var base_url = {!!json_encode(url('/')) !!};
    $(document).ready(function() {
        $('#client_form').parsley();
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
    function addClient(event) {
        var isValid = true;
        $('#client_form').each( function() {
            if ($(this).parsley().validate() !== true) isValid = false;
        });
        if (isValid) {
            event.preventDefault();
            if(vailidemail) {
                var company_name = $("#company_name").val();
                var admin_name = $("#admin_name").val();
                var admin_emailid = $("#admin_emailid").val();
                var user_password = $("#user_password").val();
                var empcode_format = $("#empcode_format").val();
                var client_prefix = $("#client_prefix").val();
                var contatct_info = $("#contatct_info").val();
                var user_lmit = $("#user_lmit").val();
                var no_of_days = $("#no_of_days").val();
                var expiry_date = $("#expiry_date").val();
                $.ajax({
                    url: base_url  +  '/SuperAdmin/save-client-creation',
                    type: 'POST',
                    data: {
                        company_name:company_name,
                        admin_name:admin_name,
                        admin_emailid:admin_emailid,
                        user_password:user_password,
                        empcode_format:empcode_format,
                        client_prefix:client_prefix,
                        contatct_info:contatct_info,
                        user_lmit:user_lmit,
                        no_of_days:no_of_days,
                        expiry_date:expiry_date
                    },
                    success: function(data) {
                        var response = data.trim();
                        if (response == 'DBPRESENT') {
                            alert('Prefix Already Used');
                            $("#client_prefix").val('');
                        } else if (response == 'EMAILPRESENT') {
                            alert('Email Id Already Used');
                            $("#admin_emailid").val('');
                        } else if (response == 'ErrorInDB') {
                            alert('Something Went Wrong In Creation Of Database');
                        } else if (response == 'DONE') {
                            alert('Client Created Succesfully');
                        }else  {
                            alert('Something Went Wrong');
                        }
                    },
                });
            } else {
                alert('Email Is Not Valid');
                $("#admin_emailid").val('');
            }

        }
    }

    function getDate(atrr) {
        var getnumber = $(atrr).val();
        var gettype = $("#no_of_days").val();
        if (gettype == 'Days') {
            if(!getnumber == ''){
                var days = parseInt(getnumber);
                var d = new Date();
                var year = d.getFullYear();
                var month = d.getMonth();
                var day = d.getDate();
                var finaldateindays = new Date(year , month , day+ days);
                var formateddate = formateDate(finaldateindays)
                 $("#show_date").text(formateddate);
                console.log(formateddate);
            } else {
                $("#show_date").text('DD/MM/YYYY');
            }
        }  else if (gettype == 'Month') {
            if(!getnumber == ''){
                var months = parseInt(getnumber);
                var d = new Date();
                var year = d.getFullYear();
                var month = d.getMonth();
                var day = d.getDate();
                var finaldateinmonth = new Date(year , (month + months), day);
                var formateddate = formateDate(finaldateinmonth)
                $("#show_date").text(formateddate);
            } else {
                $("#show_date").text('DD/MM/YYYY');
            }
        } else if (gettype == 'Year') {
            if(!getnumber == ''){
                var years = parseInt(getnumber);
                var d = new Date();
                var year = d.getFullYear();
                var month = d.getMonth();
                var day = d.getDate();
                var finaldateinyears = new Date(year + years, month, day);
                var formateddate = formateDate(finaldateinyears)
                $("#show_date").text(formateddate);
            } else {
                $("#show_date").text('DD/MM/YYYY');
            }
        } else {
            $("#show_date").text('DD/MM/YYYY');
        }
    }

    function formateDate(date_format) {
        var d1 = date_format.getDate().toString();
        var m1 = (date_format.getMonth()+1).toString();
        console.log(m1);
        var date = d1.padStart(2, '0');
        var month = m1.padStart(2, '0');
        var formatedate = date+'/'+ month +'/'+date_format.getFullYear();
        return formatedate
    }

    function checktype(atrr) {
        var gettype = $(atrr).val();
        // alert(gettype);
        if (gettype == 'Days') {
            $("#expiry_date").val("");
            $('#expiry_date').attr('disabled',false);
            $("#expiry_date").attr("placeholder", "No Of Days");
            $("#show_date").text('DD/MM/YYYY');
        } else if (gettype == 'Month') {
            $("#expiry_date").val("");
            $('#expiry_date').attr('disabled',false);
            $("#expiry_date").attr("placeholder", "No Of Month");
            $("#show_date").text('DD/MM/YYYY');
        } else if (gettype == 'Year') {
            $("#expiry_date").val("");
            $('#expiry_date').attr('disabled',false);
            $("#expiry_date").attr("placeholder", "No Of Year");
            $("#show_date").text('DD/MM/YYYY');
        } else {
            $("#expiry_date").val("");
            $('#expiry_date').attr('disabled',true);
            $("#expiry_date").attr("placeholder", "No Of Days / Month / Year");
            $("#show_date").text('DD/MM/YYYY');
        }

    }

    function checkemailId() {
        // $("#present_or_not").text('');
        if ($('#admin_emailid').parsley().isValid()) {
            vailidemail = false ;
            $.ajax({
                url: base_url  +  '/getvaild-email',
                type: 'POST',
                data: {
                    emailId:$('#admin_emailid').val(),
                },
                success: function(data) {
                    var response = data.trim();
                    if (response == 'TRUE') {
                        vailidemail = true ;
                        $("#present_or_not").text('');
                    } else if (response == 'FALSE') {
                        vailidemail = false ;
                        $("#present_or_not").text('Email In Use');
                    } else {
                        vailidemail = false ;
                        $("#present_or_not").text('Email Cant Use');
                    }
                    console.log(vailidemail);
                },
            });
        } else {
            vailidemail = false ;
        }
    }

</script>
@endsection
