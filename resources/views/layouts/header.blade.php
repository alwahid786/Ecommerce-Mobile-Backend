<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iKon</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/font-awesome-css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/DataTables/datatables.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Admin Css File -->
    <link href="{{asset('assets/css/admin-css.css')}}" rel="stylesheet" type="text/css">

    <!-- Dropzone Css  -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


    <!-- File Uploader Plugin  -->
    <link href="{{asset('assets/image-uploader/dist/image-uploader.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Date Picker Plugin  -->
    <link href="{{asset('assets/datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap-Select  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('global_assets/js/moment/moment.js')}}"></script>
    <script src="{{asset('assets/datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <!-- Date-Picker Script -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Data Tables  -->
    <script type="text/javascript" src="{{asset('assets/DataTables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/admin-script.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


    <!-- Theme JS files -->
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_pages/dashboard.js')}}"></script>
    <!-- /theme JS files -->


    <!-- CKEDITOR File -->
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

    <!-- File Upload Scripts  -->
    <script src="{{asset('assets/image-uploader/dist/image-uploader.min.js')}}" type="text/javascript"></script>

    <!-- Latest compiled and Bootstrap-Select minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>







</head>

<body>

    <div id="wrapper">
        @include('layouts.navbar')

        @yield('content')
    </div>

</body>


</html>