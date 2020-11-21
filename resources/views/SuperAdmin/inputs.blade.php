@extends('Layout.app')
@section('content')
<style>
    .input_text {
        width: 100%;
        border: 1px solid #d4d4d4;
        border-radius: 5px;
        margin: 4px 0;
        outline: none;
        padding: 6px;
        box-sizing: border-box;
        transition: 0.3s;
        background: #fffffc;
        font-size: 14px;
    }

    .input_text:focus {
        border-color: #e2e7ea;
        box-shadow: 0px 2px 7px 0px #e2e7ea;
        background: #fffbfb;
    }

    .inputWithIcon .input_text {
        padding-left: 30px;
    }

    .inputWithIcon .input_text:focus+.inside_input_icon {
        color: #ff3f00;
    }

    .inputWithIcon {
        position: relative;
    }

    .inputWithIcon .inside_input_icon {
        position: absolute;
        left: 0;
        top: 4px;
        padding: 10px 8px;
        color: #afafaf;
        transition: 0.3s;
    }


    .input_label {
        margin: 0;
        font-weight: bold;
    }

    .input_label_light {
        margin: 0;
        position: relative;
        font-weight: normal;
        font-size: 12px;
        bottom: -2px;
    }

    .error_inputcolor {
        color: #f9484d;
    }

    .error_label {
        position: relative;
        margin: 0px 5px;
        font-size: 13px;
        top: -1px;
    }

    .error_input_patch {
        float: left;
        position: relative;
        top: -5px;
    }

    .shadow_patch {
        background: white;
        margin: 0px;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 4px 0 rgba(43, 43, 43, 0.1);
    }

    .padding_10 {
        padding: 10px;
    }

    /* //////////////////    dropdown patch    /////////////////// */
    .drop_down_select {
        padding: 0 25px;
        border-radius: 5px;
    }

    .inputWithIcon .inside_dropdown_icon {
        position: absolute;
        left: 0;
        top: 0px;
        padding: 10px 8px;
        color: #afafaf;
        transition: 0.3s;
    }

    .dropdown_label_light {
        margin: 0;
        position: relative;
        font-weight: normal;
        font-size: 12px;
        bottom: 0px;
    }

    .error_dropdown_patch {
        float: left;
        position: relative;
        top: -2px;
    }

    /* /////////////     checkbox and radio    //////////////// */
    /* The container */
    .container-checkbox {
        display: inline-block;
        position: relative;
        padding-left: 30px;
        padding-right: 10px;
        margin-bottom: 8px;
        margin-top: 8px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .container-checkbox .checkmark {
        border-radius: 5px;
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container-checkbox:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container-checkbox input:checked~.checkmark {
        background-color: #2196F3;
        border-radius: 5px;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .container-checkbox .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container-checkbox input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container-checkbox .checkmark:after {
        left: 7px;
        top: 3px;
        width: 6px;
        height: 12px;
        border: 0px solid white;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }


    /* The container */
    .container-radio {
        display: inline-block;
        position: relative;
        padding-left: 30px;
        padding-right: 10px;
        margin-bottom: 8px;
        margin-top: 8px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container-radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .container-radio .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container-radio:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container-radio input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .container-radio .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container-radio input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container-radio .checkmark:after {
        top: 7px;
        left: 7px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: white;
    }

    /* ///////////   Checkbox switch patch   ///////////////// */
    .switch {
        display: inline-block;
        height: 22px;
        position: relative;
        width: 40px;
    }

    .switch input {
        display: none;
    }

    .slider {
        background-color: #ccc;
        bottom: 0;
        cursor: pointer;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: .4s;
    }

    .slider:before {
        background-color: #fff;
        bottom: 4px;
        content: "";
        height: 15px;
        left: 4px;
        position: absolute;
        transition: .4s;
        width: 15px;
    }

    input:checked+.slider {
        background-color: #66bb6a;
    }

    input:checked+.slider:before {
        transform: translateX(18px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .field-icon {
        cursor: pointer;
        float: right;
        margin-right: 10px;
        margin-left: -25px;
        margin-top: -29px;
        position: relative;
        z-index: 2;
    }

    /* //////////      Multiple FIle Upload     /////////////////////// */
    .wrap_of_upload {
        border-radius: 4px;
        background-color: #2e4261;
        box-shadow: 0 1px 2px 0 #c9ced1;
        padding: 1.25rem;
        margin-bottom: 1.25rem;
    }

    .file {
        position: relative;
        font-size: 1.0625rem;
        font-weight: 600;
    }

    .file__input,
    .file__value {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        margin-bottom: 0.875rem;
        color: rgba(255, 255, 255, 0.3);
        padding: 0.9375rem 1.0625rem;
    }

    .file__input--file {
        position: absolute;
        opacity: 0;
    }

    .file__input--label {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        margin-bottom: 0;
        cursor: pointer;
    }

    .file__input--label:after {
        content: attr(data-text-btn);
        border-radius: 3px;
        background-color: #536480;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.18);
        padding: 0.9375rem 1.0625rem;
        margin: -0.9375rem -1.0625rem;
        color: white;
        cursor: pointer;
    }

    .file__value {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        color: rgba(255, 255, 255, 0.6);
    }

    .file__value:hover:after {
        color: white;
    }

    .file__value:after {
        content: "X";
        cursor: pointer;
    }

    .file__value:after:hover {
        color: white;
    }

    .file__remove {
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #000;
    }

    /* /////////     Single FIle Upload      //////// */
    .file-drop-area {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        max-width: 100%;
        padding: 25px;
        border: 1px dashed rgba(255, 255, 255, 0.4);
        border-radius: 3px;
        -webkit-transition: 0.2s;
        transition: 0.2s;
    }

    .file-drop-area.is-active {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .fake-btn {
        flex-shrink: 0;
        background-color: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        padding: 8px 15px;
        margin-right: 10px;
        font-size: 12px;
        text-transform: uppercase;
    }

    .file-msg {
        font-size: small;
        font-weight: 300;
        line-height: 1.4;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .file-input {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
        opacity: 0;
    }

    .file-input:focus {
        outline: none;
    }

    .file_up_back {
        background: #2e42611f;
        border: 2px dashed #d2d2d2;
    }

    /* ////////////       Button section css      /////// */
    .cancel_btnn {
        background: #e5f3fe;
    color: #2a93fc;
    font-weight: 600;
    }
    .not_approve {
        color: white;
        background: #eb5253;
    }
    
    .btnn {
        font-size: 12px;
        padding: 7px 15px;
        border: 0;
        border-radius: 10px;
        font-weight: 600;
    }
    .primary_btnn {
        color: white;
        background: #2196f3;
    }

    .primary_btnn:hover {
        color: white;
        background: #107ed6;
    }

    button:focus {
        outline: 0px dotted !important;
    }

    /* ////////////         Badge Section          //////////// */
    .badge_patch {
        font-size: 10px;
    padding: 3px 10px;
    border-radius: 10px;
    }
    .badge_approve {
        color: #1c7b23;
    background: #e6ffe8;
    }
    .badge_red {
        color: #e23131;
    background: #fef6f6;
    }

    .badge_orange {
        color: #fa6400;
    background: #fff2ea;
        
    }

    
    
</style>
<div>
    <div class="centered h1_weight_700 shadow_patch">
        <h1>Inputs</h1>
        <div>
            <div class="row ">

                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Name</label>
                    <div>
                        <label for="name" class="input_label_light">First Name</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text" placeholder="Your name">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label"></label>
                    <div>
                        <label for="name" class="input_label_light">First Name</label>
                        <div class="inputWithIcon">
                            <input type="text" id="name" class="input_text" placeholder="Your name">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Date Picker</label>
                    <div>
                        <label for="name" class="input_label_light">Date Picker</label>
                        <div class="inputWithIcon">
                            <input type="date" id="name" class="input_text" placeholder="Your name">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Select Option</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div class="inputWithIcon">
                            <i class="feather icon-user inside_dropdown_icon"></i>
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
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Check Box</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <label class="container-checkbox">One
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Two
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Three
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Four
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Radio Patch</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <label class="container-radio">One
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">Two
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">Three
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">Four
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Time Picker</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Time Select</label>
                        <div class="inputWithIcon">
                            <div class="display_flex">
                                <select class="form-control display_inline border_left_top_bottom" id="sel1">
                                <?php 
                                for ($i=0; $i < 13; $i++) { 
                                    ?>
                                    <option><?php echo $i?></option>
                                    <?php
                                }
                                ?>
                                </select>
                                <select class="form-control display_inline" id="sel1">
                                <?php 
                                for ($i=0; $i < 60; $i++) { 
                                    ?>
                                    <option><?php echo $i?></option>
                                    <?php
                                }
                                ?>
                                </select>
                                <select class="form-control display_inline border_right_top_bottom" id="sel1">
                                    <option>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>
                        </div>

                        <span class="error_dropdown_patch">
                            <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Number</label>
                    <div>
                        <label for="name" class="input_label_light">Number Input</label>
                        <div class="inputWithIcon">
                            <input type="number" id="name" class="input_text" placeholder="Contact No">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Password</label>
                    <div>
                        <label for="name" class="input_label_light">Passowrd Input</label>
                        <div class="inputWithIcon">
                            <input type="password" id="password-field" class="input_text" placeholder="Password">
                            <i class="feather icon-user inside_input_icon"></i>
                            <span class="error_input_patch">
                                <i class="feather icon-x error_inputcolor"><label for="name" class="error_label">Name Taken</label></i>
                            </span>
                            <span toggle="#password-field" class="feather icon-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Switch Button</label>
                    <div class="">
                        <label id="checkbox_text" class="float_left grey widht_85 text_align_left">Toggle this switch element </label>
                        <label class="switch float_right" for="checkbox">
                            <input type="checkbox" id="checkbox" onchange="change_font_event(this)" />
                            <div class="slider round"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <h1>Select 2 Inputs</h1>
        <div>
            <div class="row ">
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Option</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Option</label>
                    <div>
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyomingsdfdsfsdffds</option>
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyomingdsf</option>
                                <option value="AL">Alabamasdfsdff</option>
                                <option value="WY">Wyoming</option>
                                <option value="AL">Alabdsfsama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Upload File</h1>
        <div>
            <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Single File</label>
                    <div>
                        <div class="file-drop-area file_up_back">
                            <span class="fake-btn">Choose files</span>
                            <span class="file-msg">or drag and drop files here</span>
                            <input class="file-input" type="file" multiple>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 padding_10">
                    <label for="name" class="input_label">Multiple FIle</label>
                    <div>
                        <div class="wrap_of_upload">
                            <form action="#" name="form" method="get">
                                <div class="file">
                                    <div class="file__input" id="file__input">
                                        <input class="file__input--file" id="customFile" type="file" multiple="multiple" name="files[]" />
                                        <label class="file__input--label" for="customFile" data-text-btn="Upload">Add file:</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Button Section</h1>
        <div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                    <button class="primary_btnn btnn">Submit</button>
                    <button class="cancel_btnn btnn">Cancel</button>
                    <button class="cancel_btnn btnn">Send Back</button>
                    <button class="not_approve btnn">Not Approve</button>
                </div>
            </div>
        </div>
        <h1>Badge Section</h1>
        <div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                    <label class="badge_patch badge_approve">Approve</label>
                    <label class="badge_patch badge_red">Cancel</label>
                    <label class="badge_patch badge_orange">Pending</label>
                </div>
            </div>
        </div>
        <h1>Table Structure</h1>
        <div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 padding_10">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addscriptscontent')
<script>
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