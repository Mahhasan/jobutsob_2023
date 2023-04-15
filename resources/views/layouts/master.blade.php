<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- from old app -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->

    <title>JobUtsob</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
           body {
            /* background: url("/image/back2.jpg") no-repeat center center fixed!important; */
            -webkit-background-size: cover!important;
            -moz-background-size: cover!important;
            -o-background-size: cover!important;
            background-size: cover!important;
            background: #dfe6e9;
        }

        .card {
           
            opacity: .9;
            box-shadow: 10px 10px #3498db;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('common.header')
                <!-- End of Topbar -->

                <div class="container-fluid" style="margin-top: 130px;">
                    <!-- Begin Page Content -->
                    @yield('content')
                    <!-- /.container-fluid -->
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('common.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" defer></script>


    <script defer>
    $(document).ready(function() {
        
        $(".js-example-basic-multiple").select2();


        $(document).on('change', 'input[Id="bachelor_status"]', function (e) {
        //  alert($(this).val());
        if($(this).val()=='yes'){
            // $(".bachelor_result").hide();
            // $(".bachelor_semester").show();
            $("#bachelor_result_label").html("Enter Result Till Now ");
            $("#bachelor_year_label").html("Enter Semester/Year. Ex: 5th Semester/3rd Year ");
            
        }
        else {
            // $(".bachelor_result").show();
            // $(".bachelor_semester").hide();
            $("#bachelor_result_label").html("Enter Result ");
            $("#bachelor_year_label").html("Enter Passing Year ");

        }
       
       
        
        });
        $(document).on('change', 'input[Id="masters_status"]', function (e) {
          //alert($(this).val());
        if($(this).val()=='yes'){
            // $(".masters_result").hide();
            // $(".masters_semester").show();
            $("#masters_year_label").html("Enter Semester/Year. Ex: 1st Semester/1st Year ");
            $("#masters_result_label").html("Enter Result Till Now ");
            
        }
        else {
            // $(".masters_result").show();
            // $(".masters_semester").hide();
            $("#masters_result_label").html("Enter Result ");
            $("#masters_year_label").html("Enter Passing Year ");
        }
       
       
        
        });

});
</script>
<script>
       function amount() {
            let cpu = document.getElementById("certificate").value;
            var student = document.getElementById("student").value;
            var alumni = document.getElementById("alumni").value;
            cpuPrice = 0;
            if (cpu == student) {
                cpuPrice = 100;
            }
            else if (cpu == alumni) {
                cpuPrice = 300;
            }
            else if (cpu == cpu ) {
            cpuPrice = 0;
            }

         document.getElementById("output").innerHTML = cpuPrice;
         document.getElementById("test_payment").innerHTML = cpuPrice;
        }
    </script>

</body>

</html>