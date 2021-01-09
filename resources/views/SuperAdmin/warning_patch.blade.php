@extends('Layout.app')
@section('content')
<style></style>
<div>
    <div class="h1_weight_700 shadow_patch">
        <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12 margin_bottom_10">
                <div class="vertical_center">
                    <div style="margin: 40px;">
                    <label style="
    font-size: 150px;
    position: absolute;
    opacity: 0.040;
    top: -120px;
    right: -100px;
    z-index:-1;
">Oops</label>
                    <h1 class="bolder_900"><i class="feather icon-alert-triangle" style="color: #f86d70;margin-right: 10px;"></i>Oooops !</h1>
                    <h5>Your are not allowed to edit</h5>
                    <br><br>
                    <a href=""class="back_btn">Go Back</a>
                    </div>
                
                </div>
                
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12 margin_bottom_10" style="text-align: end;">
            <img src="{{asset('/public/assets/images/SVG/undraw_warning_cyit.svg') }}" alt="Warning" style="width: 80vh;margin: 40px;z-index:999;">
            </div>
        </div>
    </div>
</div>
@endsection
@section('addscriptscontent')

@endsection