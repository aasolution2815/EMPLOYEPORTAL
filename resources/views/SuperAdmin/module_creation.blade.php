@extends('Layout.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style></style>
<div>
    <div class="h1_weight_700 shadow_patch">
        <div id="textbox" class="">
            <p class="alignleft bold_heavy bold_font_heading" id="add_client">Modules</p>
            <p class="alignright margin-top_10">
                <a href="javascript:history.back()"><span class="btn_with_icon" style="margin-right: 15px;"><i class="feather icon-corner-up-left  small_icon_left"></i>
                        Back </span></a>


            </p>
        </div>
        <div style="clear: both;"></div>
        <form action="#" id="module_form">
            <div id="form_patch">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                        
                        <div>
                            <label for="name" class="input_label_light">Module Name</label>
                            <div class="inputWithIcon">
                                <input type="text" class="input_text margin_top_0"  id="module_name" placeholder="Module name" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                <i class="feather icon-user inside_input_icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                        
                        <div>
                            <label for="name" class="input_label_light">URL</label>
                            <div class="inputWithIcon">
                                <input type="text" class="input_text margin_top_0" placeholder="Module Url" id="module_url" placeholder="Module URL" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                <i class="feather icon-user inside_input_icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 padding_10">
                    
                        <div>
                            <label for="name" class="dropdown_label_light">Select Category</label>
                            <div>
                                <select class="js-example-basic-single" name="category_id" id="category_id" required="" data-parsley-trigger="blur" data-parsley-required-message="Required">
                                    <option value="">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 padding_10">
                        <div>
                            <label for="name" class="input_label_light">Description</label>
                            <div class="inputWithIcon">
                                <textarea id="w3review" name="w3review" rows="4" cols="50" name="description" id="description" class="textarea_p"></textarea>
                                <!-- <i class="feather icon-user inside_input_icon"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="textbox" class="">
                    <p class="alignright">
                        <button class="cancel_btnn btnn">Cancel</button>
                        <button class="primary_btnn btnn" onclick="addModules(event)">Submit</button>
                    </p>
                </div>
            </div>
        </form>

        <div style="clear: both;"></div>
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
        <div style="clear: both;"></div>
    </div>
</div>
@endsection
@section('addscriptscontent')
<script>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var path = {!! json_encode(url('/')) !!};
    $(document).ready(function() {
        $('#module_form').parsley({

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
    showDatatable();





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


    function showDatatable() {
        $('#example3').DataTable().clear().destroy();
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
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'username', name: 'username'},
            {data: 'phone', name: 'phone'},
            {data: 'dob', name: 'dob'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
        });
    }

    function addModules(event) {
        event.preventDefault();
        var isValid = true;
        $('#module_form').each(function() {
            if ($(this).parsley().validate() !== true) isValid = false;
        });
        if (isValid) {
            alert("Hiiii");
        }
    }
</script>
@endsection
