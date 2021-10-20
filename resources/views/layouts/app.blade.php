<!DOCTYPE html>
<html dir="rtl">
<head>

    <!-- /.website title -->
    <title>Tarhily</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8" />
    <!-- CSS Files -->
    <link href="{{ URL::asset('front/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ URL::asset('front/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('front/fonts/icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('front/fonts/icon-7-stroke/css/helper.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('front/css/animate.css') }}" rel="stylesheet" media="screen">
    <link href="{{ URL::asset('front/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('front/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('front/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <!-- Colors -->
    <!-- <link href="{{ URL::asset('front/css/css-index-blue.css') }}" rel="stylesheet" media="screen">-->

    <link href="{{ URL::asset('front/css/css-index-yellow.css') }}" rel="stylesheet" media="screen">


    <!-- Google Fonts -->

<style>

<style>

    .designers {
        padding-top: 4rem;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
        gap: 2rem;
        place-content: center;
    }

    .designers .card  {
        position: relative;
        overflow: hidden;
    }

    .designers .card-img-top {
        width: 100%;
        height: 100%;
    }

    .designers .card .card-body {
        background: rgba(0,0,0,0.9);
        color: #fff;
        padding-top: 2rem;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: translateY(100%);
        transition: all .4s ease-in-out;
    }

    .designers .card:hover .card-body {
        transform: translateY(70%);
    }


    #ads {
        margin: 30px 0 30px 0;

    }

    #ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

    #ads .card-notify-year {
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        font-size: 14px;
        width: 50px;
        height: 50px;
        padding: 15px 0 0 0;
    }


    #ads .card-detail-badge {
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;
    }



    #ads .card:hover {
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    #ads .card-image-overlay {
        font-size: 20px;

    }


    #ads .card-image-overlay span {
        display: inline-block;
    }


    #ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;
        position: relative;
        background-color: #e6de08;
    }

    #ads .ad-btn:hover {
        background-color: #e6de08;
        color: #1e1717;
        border: 2px solid #e6de08;
        background: transparent;
        transition: all 0.3s ease;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    }

    #ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }

</style>
</style>



<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<!--<div id="preloader"></div>-->
<div id="top"></div>

<!-- NAVIGATION -->
@include('include.header')




<div>

@yield('content')
</div>



</div>
</div>

</div>
</div>
</div>
<br><br><br><br><br><br>

<!-- /.footer -->
@include('include.footer')



<!-- /.javascript files -->
<script src="{{ URL::asset('front/js/jquery.js') }}"></script>
<script src="{{ URL::asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('front/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ URL::asset('front/js/custom.js') }}"></script>
<script src="{{ URL::asset('front/js/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('front/js/wow.min.js') }}"></script>
<script src="{{ URL::asset('front/js/owl.carousel.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="{{ URL::asset('front/js/google.js') }}"></script>
<script src="{{ URL::asset('front/js/booking.js') }}"></script>
<script src="{{ URL::asset('front/js/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ URL::asset('front/js/jquery.validate.min.js') }}"></script>

<script src="{{ URL::asset('front/js/snap.svg-min.js') }}"></script>
<script src="{{ URL::asset('front/js/hovers.js') }}"></script>





<!-- BEGIN VENDOR JS-->
<script src="{{URL::asset('admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{URL::asset('admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{URL::asset('admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{URL::asset('admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{URL::asset('admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{URL::asset('admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{URL::asset('admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{URL::asset('admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{URL::asset('admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{URL::asset('admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{URL::asset('admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{URL::asset('admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<script src="{{   URL::asset('admin/DataTables/datatables.min.js')}}"></script>




<script>
    new WOW().init();
    SD('#date_time').datetimepicker({
        format: 'hh:mm',
        language: 'en-US',
        pickDate: false,
        // disables the date picker
        pickTime: true
    });
</script>

<script>
    (function () {
        function init() {
            var speed = 250,
                easing = mina.easeinout;
            [].slice.call(document.querySelectorAll('#carssections > div')).forEach(function (el) {
                var s = Snap(el.querySelector('svg')), path = s.select('path'),
                    pathConfig = {
                        from: path.attr('d'),
                        to: el.getAttribute('data-path-hover')
                    };

                el.addEventListener('mouseenter', function () {
                    path.animate({'path': pathConfig.to}, speed, easing);
                });

                el.addEventListener('mouseleave', function () {
                    path.animate({'path': pathConfig.from}, speed, easing);
                });
            });
        }
        init();
    })();
</script>




</body>
<script>
    $(document).ready(function() {
        $('#state-dropdown').on('change', function() {
            var state_id = this.value;
            $("#city-dropdown").html('');
            $.ajax({
                url:"{{url('get-cities-by-state')}}",
                type: "POST",
                data: {
                    state_id: state_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $('#city-dropdown').html('<option value="">اختار المنطقة </option>');
                    $.each(result.cities,function(key,value){
                        $("#city-dropdown").append('<option value="'+value.name+'">'+value.name+'</option>');
                    });
                }
            });
        });
    });
</script>

</html>