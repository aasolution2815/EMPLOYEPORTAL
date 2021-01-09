@extends('Layout.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style></style>
<div>
    <div class="h1_weight_700 shadow_patch">
        <div id="textbox" class="">
            <p class="alignleft bold_heavy bold_font_heading" id="add_client">Add Client</p>
            <p class="alignright margin-top_10">
                <a href="javascript:history.back()"><span class="btn_with_icon" style="margin-right: 15px;"><i class="feather icon-corner-up-left  small_icon_left"></i>
                        Back </span></a>
                <span class="btn_with_icon c1" style="margin-right: 15px;"><i class="feather icon-file-plus  small_icon_left"></i> Import </span>
                <span class="btn_with_icon c2 hide" style="margin-right: 15px;"><i class="feather icon-plus-circle  small_icon_left"></i> Form </span>

            </p>
        </div>
        <div style="clear: both;"></div>
        <form action="#" id="client_form">
            <div id="form_patch">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div style="text-align: center;margin-top: 30px;">
                            <label for="name" class="label_patch">Company Logo</label>
                            <div class="container">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url({{$images}});">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 margin_bottom_10">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 margin_bottom_10">
                                <div style="margin-top: 30px;">
                                    <label for="name" class="label_patch">Company Name</label>
                                    <div class="inputWithIcon">
                                        <input type="text" id="company_name" class="input_text margin_top_0 form-control" placeholder="Company Name" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                        <i class="feather icon-briefcase inside_input_icon"></i>
                                        {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 margin_bottom_10">
                                <div style="margin-top: 30px;">
                                    <label for="name" class="label_patch">Admin Name</label>
                                    <div class="inputWithIcon">
                                        <input type="text" id="admin_name" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" class="input_text margin_top_0 form-control" placeholder="Admin Name">
                                        <i class="feather icon-user inside_input_icon"></i>
                                        {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 margin_bottom_10">
                                <div>
                                    <label for="name" class="label_patch">Employee Code</label>
                                    <div class="inputWithIcon">
                                        <input type="text" id="empcode_format" class="input_text margin_top_0 form-control" placeholder="Employee Code" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                        <i class="feather icon-hash inside_input_icon"></i>
                                        {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 margin_bottom_10">
                                <div>
                                    <label for="name" class="label_patch">Prefix</label>
                                    <div class="inputWithIcon">
                                        <input type="text" id="client_prefix" class="input_text margin_top_0 form-control" placeholder="Prefix" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                        <i class="feather icon-user inside_input_icon"></i>
                                        {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">Email-ID</label>
                            <div class="inputWithIcon">
                                <input type="email" id="admin_emailid" class="input_text margin_top_0 form-control" placeholder="Email-ID" autocomplete="nope" required="" data-parsley-trigger="blur" onkeyup="checkemailId()" data-parsley-required-message="Required">
                                <i class="feather icon-mail inside_input_icon"></i>
                                <span id="present_or_not">

                                </span>

                                {{-- <span class="form-error error_label" id="present_or_not"></span> --}}
                                {{-- <span ></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12 margin_bottom_10">
                                <div>
                                    <label for="name" class="label_patch">Password <a href="#" style="font-size: 11px;" data-toggle="tooltip" data-placement="top" title="Must Contain 6 Charcter Atlest 1 Uper Case ,Lower Case, Number, and Special Charter @,#,_,-"><i class="feather icon-info inside_input_icon" style="font-size: 15px;"></i></a></label>
                                    <div class="inputWithIcon">
                                        <input type="password" id="user_password" class="input_text margin_top_0 form-control" placeholder="Password" autocomplete="new-password" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[@#_-]).{6,}">
                                        <i class="feather icon-lock inside_input_icon"></i>
                                        <span toggle="#user_password" class="feather icon-eye field-icon toggle-password"></span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10" style="padding: 0;margin-top: 3px;">
                                <div>
                                <label for="name" class="label_patch"></label>
                                    <div class="inputWithIcon">
                                    <button class="aut_g">Auto-Generate</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">Contact Info</label>
                            <div class="inputWithIcon">
                                <input type="number" id="contatct_info" class="input_text margin_top_0 form-control" placeholder="Contact Info" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                <i class="feather icon-hash inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">User Limit</label>
                            <div class="inputWithIcon">
                                <input type="number" id="user_lmit" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" class="input_text margin_top_0 form-control" placeholder="User Limit">
                                <i class="feather icon-user inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">Start Date</label>
                            <div class="inputWithIcon">
                                <input type="date" iname="startdate" id="startdate" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" class="input_text margin_top_0 form-control" placeholder="Your name" value="{{date('Y-m-d')}}">
                                <i class="feather icon-calendar inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">Select Type of expiry</label>
                            <div class="inputWithIcon">
                                <i class="feather icon-hash inside_dropdown_icon"></i>
                                <div class="">
                                    <select class="form-control drop_down_select" id="type_auth" onchange="checktype(this)" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                        <option value="">Select Type</option>
                                        <option value="Days">Days</option>
                                        <option value="Month">Month</option>
                                        <option value="Year">Year</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <span class="error_dropdown_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name
                                        Taken</label></i>
                            </span> --}}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">No. of Days</label>
                            <div class="inputWithIcon">
                                <input type="number" id="no_of_days" disabled onkeyup="getDate(this)" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" class="input_text margin_top_0 form-control" placeholder="No. of Days / Month / Year">
                                <i class="feather icon-hash inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">End Date</label>
                            <div class="inputWithIcon">
                                <input type="date" name="liciencedate" id="liciencedate" required="" data-parsley-trigger="blur" data-parsley-required-message="Required" class="input_text margin_top_0 form-control" placeholder="End Date" disabled>
                                <i class="feather icon-calendar inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                        <div>
                            <label for="name" class="label_patch">Website</label>
                            <div class="inputWithIcon">
                                <input type="text" id="name" class="input_text margin_top_0 form-control" placeholder="Website">
                                <i class="feather icon-globe inside_input_icon"></i>
                                {{-- <span class="error_input_patch">
                                    <i class="feather icon-x error_inputcolor"><label for="name"
                                            class="error_label">Name Taken</label></i>
                                </span> --}}
                            </div>
                        </div>
                    </div>

                </div>
                <div id="textbox" class="">
                    <p class="alignright">
                        <button class="cancel_btnn btnn">Cancel</button>
                        <button class="primary_btnn btnn" onclick="addClient(event)">Submit</button>
                    </p>
                </div>
            </div>
        </form>
        <div id="import_patch" class="hide">
            <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                <div>
                    <div class="file-drop-area file_up_back">
                        <span class="fake-btn">Choose files</span>
                        <span class="file-msg">or drag and drop files here</span>
                        <input class="file-input" type="file">
                    </div>
                    <br>
                    <div id="textbox" class="">
                        <p class="alignright">
                            <button class="cancel_btnn btnn">Cancel</button>
                            <button class="primary_btnn btnn">Submit</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>
@endsection
@section('addscriptscontent')
<script>
    $(".c1").on('click', function(e) {
        e.preventDefault();
        $(".c1").fadeOut(function() {
            $("#import_patch").fadeIn();
            $("#form_patch").fadeOut();
            $(".c2").fadeIn();
        });
    });

    $(".c2").on('click', function(e) {
        e.preventDefault();
        $(".c2").fadeOut(function() {
            $("#form_patch").fadeIn();
            $("#import_patch").fadeOut();
            $(".c1").fadeIn();
        });
    });

    $(document).ready(function() {
        $('#client_form').parsley({

            errorClass: 'is-invalid text-danger',
            successClass: 'is-valid', // Comment this option if you don't want the field to become green when valid. Recommended in Google material design to prevent too many hints for user experience. Only report when a field is wrong.
            errorsWrapper: '<span class="form-error error_label"><i class="feather icon-x error_inputcolor"></i></span>',
            errorTemplate: '<span></span>',
            trigger: 'change'

        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function(x, status, error) {
                if (x.status == 403) {
                    alert("Sorry, your session has expired. Please login again to continue");
                    window.location.href = "/";
                } else {
                    alert("An error occurred: " + status + "nError: " + error);
                }
            }
        });
    });;

    // ------------ Multiple File upload BEGIN ------------
    $('.file__input--file').on('change', function(event) {
        var files = event.target.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            $("<div class='file__value'><div class='file__value--text'>" + file.name + "</div><div class='file__value--remove' data-id='" + file.name + "' ></div></div>").insertAfter('#file__input');
        }
    });

    //Click to remove item
    $('body').on('click', '.file__value', function() {
        $(this).remove();
    });
    // ------------ Multiple File upload END ------------






    function change_font_event(params) {
        var checkboxid = $(params).attr("id");
        var label = checkboxid.concat("_text");
        if ($(params).is(':checked')) {
            $('#' + label).animate({
                'color': '#292929'
            });
        } else {
            $('#' + label).animate({
                'color': '#7d7d7d'
            });
        }
    }

    $(".toggle-password").click(function() {

        $(this).toggleClass("icon-eye icon-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });


    ////////////      Single File Upload       ///////////////

    var $fileInput = $('.file-input');
    var $droparea = $('.file-drop-area');

    // highlight drag area
    $fileInput.on('dragenter focus click', function() {
        $droparea.addClass('is-active');
    });

    // back to normal state
    $fileInput.on('dragleave blur drop', function() {
        $droparea.removeClass('is-active');
    });

    // change inner text
    $fileInput.on('change', function() {
        var filesCount = $(this)[0].files.length;
        var $textContainer = $(this).prev();

        if (filesCount === 1) {
            // if single file is selected, show file name
            var fileName = $(this).val().split('\\').pop();
            $textContainer.text(fileName);
        } else {
            // otherwise show number of files
            $textContainer.text(filesCount + ' files selected');
        }
    });


    ///////////     image upload js with preview  //////////////////////

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    function addClient(event) {
        var bg = $('#imagePreview').css('background-image');
        bg = bg.replace('url(', '').replace(')', '').replace(/\"/gi, "");
        var isValid = true;
        $('#client_form').each(function() {
            if ($(this).parsley().validate() !== true) isValid = false;
        });
        if (isValid) {
            event.preventDefault();
        }
    }
</script>
@endsection