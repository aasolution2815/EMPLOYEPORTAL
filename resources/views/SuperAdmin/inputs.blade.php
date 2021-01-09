@extends('Layout.app')
@section('content')
<style></style>
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
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Your name">
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
                            <input type="text" id="name" class="input_text margin_top_0" placeholder="Your name">
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
                            <input type="date" id="name" class="input_text margin_top_0" placeholder="Your name">
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
                                    for ($i = 0; $i < 13; $i++) {
                                    ?>
                                        <option><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select class="form-control display_inline" id="sel1">
                                    <?php
                                    for ($i = 0; $i < 60; $i++) {
                                    ?>
                                        <option><?php echo $i ?></option>
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
                            <input type="number" id="name" class="input_text margin_top_0" placeholder="Contact No">
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
                            <input type="password" id="password-field" class="input_text margin_top_0" placeholder="Password">
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

                    <button class="cancel_btnn btnn">Cancel</button>
                    <button class="primary_btnn btnn">Submit</button>
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
        <h1>Popup Design</h1>
        <div>
            <a href="#test-popup" class="open-popup-link">Show inline popup</a>
            <div id="test-popup" class="white-popup mfp-hide">
                <h1>Hello I'm Popup</h1>
            </div>
        </div>
        <h1>Table Structure</h1>
        <div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                    <table class="table yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addscriptscontent')
<!-- popup script -->
<script>
    $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});

</script>
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


        var table = $('.yajra-datatable').DataTable({
            language: {
                searchPlaceholder: '',
                search: '<i class="feather icon-search">',
                info: "Displaying _START_ to _END_ from _TOTAL_ ",
                paginate: {
                    next: '<i class="feather icon-chevron-right mid_icon">',
                    previous: '<i class="feather icon-chevron-left mid_icon">'
                }
            },
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