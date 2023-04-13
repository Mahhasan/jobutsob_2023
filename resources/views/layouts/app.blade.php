<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIU Job Utsob 2022 </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
<body>

    <div id="app">
        <!-- Start Header -->
        <!-- End Header -->

        <main class="py-4">
           <br><br><br><br>
           
            @yield('content')
        </main>
    </div>
</body>
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
</html>
