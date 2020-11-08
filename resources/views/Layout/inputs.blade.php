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
</style>
<div>
    <div class="row shadow_patch">
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
            <label for="name" class="input_label">Date</label>
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
            <label for="name" class="input_label">Option</label>
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
            <label for="name" class="input_label">Option</label>
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
            <label for="name" class="input_label">Option</label>
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
    </div>

</div>
@endsection
@section('addscriptscontent')
<script>
</script>
@endsection