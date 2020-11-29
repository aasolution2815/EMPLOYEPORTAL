@extends('Layout.app')
@section('content')
<style></style>
<div>
    <div class="h1_weight_700 shadow_patch">
        <div id="textbox" class="">
            <p class="alignleft bold_heavy bold_font_heading" id="add_client">Add Client</p>
            <p class="alignright margin-top_10">
                <span class="btn_with_icon" style="margin-right: 15px;"><i class="feather icon-corner-up-left  small_icon_left"></i> Back </span>
                <span class="btn_with_icon c1" style="margin-right: 15px;"><i class="feather icon-file-plus  small_icon_left"></i> Import </span>
                <span class="btn_with_icon c2 hide" style="margin-right: 15px;"><i class="feather icon-plus-circle  small_icon_left"></i> Form </span>

            </p>
        </div>
        <div style="clear: both;"></div>

        <div id="form_patch">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Company Name</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Company Name">
                            <i class="feather icon-briefcase inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Admin Name</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Admin Name">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Email-ID</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Email-ID">
                            <i class="feather icon-mail inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Password</label>
                        <div class="inputWithIcon">
                            <input type="password" id="password-field" class="input_text margin_top_0" placeholder="Password">
                            <i class="feather icon-lock inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                            <span toggle="#password-field" class="feather icon-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Employee Code</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Employee Code">
                            <i class="feather icon-hash inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">User Limit</label>
                        <div class="inputWithIcon">
                            <input type="number" id="name" class="input_text margin_top_0" placeholder="User Limit">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Start Date</label>
                        <div class="inputWithIcon">
                            <input type="date" id="name" class="input_text margin_top_0" placeholder="Your name">
                            <i class="feather icon-calendar inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Select Type of expiry</label>
                        <div class="inputWithIcon">
                            <i class="feather icon-hash inside_dropdown_icon"></i>
                            <div class="">
                                <select class="form-control drop_down_select" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <span class="error_dropdown_patch">
                            <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">No. of Days</label>
                        <div class="inputWithIcon">
                            <input type="number" id="name" class="input_text margin_top_0" placeholder="No. of Days">
                            <i class="feather icon-hash inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">End Date</label>
                        <div class="inputWithIcon">
                            <input type="date" id="name" class="input_text margin_top_0" placeholder="End Date">
                            <i class="feather icon-calendar inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Website</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Website">
                            <i class="feather icon-globe inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_10">
                    <div>
                        <label for="name" class="label_patch">Prefix</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Prefix">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="textbox" class="">
                <p class="alignright">
                    <button class="cancel_btnn btnn">Cancel</button>
                    <button class="primary_btnn btnn">Submit</button>
                </p>
            </div>
        </div>

        <div id="import_patch" class="hide">
            <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                <div>
                    <div class="file-drop-area file_up_back">
                        <span class="fake-btn">Choose files</span>
                        <span class="file-msg">or drag and drop files here</span>
                        <input class="file-input" type="file" multiple>
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
        $("#table input").click(function() {
            $('#text').animate({
                'color': '#e73c27'
            }, 500, function() {
                $('#text').animate({
                    'color': '#000'
                }, 500);
            });
        });

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


        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('students.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'dob',
                    name: 'dob'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });

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
</script>
@endsection