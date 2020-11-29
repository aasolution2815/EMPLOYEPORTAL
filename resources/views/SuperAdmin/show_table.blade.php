@extends('Layout.app')
@section('content')
<style>

</style>

<div>
    <div class=" h1_weight_700 shadow_patch">
        <div id="textbox" class="">
            <p class="alignleft bold_heavy bold_font_heading">Client <label class="grey_small_text">342</label></p>
            <p class="alignright">
                <span class="btn_with_icon">Add <i class="feather icon-plus-circle  small_icon"></i></span>
            </p>
        </div>
        <div style="clear: both;"></div>
        <div id="textbox" class="">
            <!-- <p class="alignleft bold_heavy "><label for="">Filter</label> <i class="feather icon-filter "></i> <i class="fa fa-angle-down margin_0_10" aria-hidden="true"></i></p> -->
            <p class="alignright">
                <div data-toggle="dropdown" style="margin-left: 10px;float: right;">
                    <span><i class="feather icon-settings mid_icon"></i></span>
                </div>
                <i class="feather icon-printer mid_icon" style="float: right;"></i>
                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <a href="#!">
                            <i class="feather icon-settings"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-user"></i> Profile
                        </a>
                    </li>
                </ul>
            </p>
            <div class="">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-head" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Filter <i class="feather icon-filter "></i>
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="row padding_5">
                    <div class="col-md-3 col-sm-6 col-xs-12 padding_10">
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 padding_10">
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 padding_10">
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 padding_10">
                        <label for="name" class="dropdown_label_light">Select Input</label>
                        <div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 padding_10 centered">

                        <button class="cancel_btnn btnn">Cancel</button>
                        <button class="primary_btnn btnn">Show results</button>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>

        <div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 padding_15">
                    <table class="table yajra-datatable">
                        <thead>
                            <tr>
                                <th></th>
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
            columns: [
                // {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
                {
                    data: 'checkbox',
                    orderable: false,
                    searchable: false,
                    name: 'checkbox'
                },
                {
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
</script>
@endsection