<!DOCTYPE html>
<html lang="en">

<head>
    <title>VJF Fall 2021 | Skill Jobs</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    <style>
        .job {
            position: absolute;
            margin-top: -19.2em;
            margin-left: 374px;
            padding: 9px;
            z-index: 5;
        }

        .logo {
            position: absolute;
            margin-top: -641px;
            margin-left: 223px;
        }

        .title {
            position: absolute;
            margin-top: -526px;
            margin-left: 351px;
            color: white;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #c40f0f !important;
        }

        .multiple-items {
            width: 95%;

            margin: auto;
            color: white;
        }

        body {
            background: url("./image/back2.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .items {
            margin-top: 4%;
        }

        .toplogo {
            position: absolute;
            margin-top: -3%;
            width: 13%;
            margin-left: 2%;
            background: white;
            border-radius: 10px;
        }

        .mainlogo {
            position: absolute;
            margin-top: 39%;
            margin-left: 43%;
            width: auto;
            border-radius: 10px;
        }

        .avatar1 {
            position: absolute;
            margin-top: 295px;
            margin-left: 302px;
            padding: 9px;
        }

        .avatar2 {
            position: absolute;
            margin-top: 329px;
            margin-left: 424px;
            padding: 9px;
        }

        .stall {
            position: absolute;
            margin-top: -548px;
            margin-left: 582px;
            font-size: 28px;
            font-weight: bold;
            color: black;
        }

        .navbuttons {
            position: absolute;
            z-index: 6;
            margin-left: 77%;
            margin-top: -1.3%;
        }

        .stallimage {
            width: 850px;
        }

        .title marquee {
            width: 200px !important;
        }

        #loading {
            position: fixed;
            width: 100%;
            height: 126vh;
            background: #fff url('https://vjf.skill.jobs/wp-content/uploads/2021/09/Virtual-Job-fest-2021-01.png') no-repeat center center;
            z-index: 9999;
            margin-top: -213px;
        }

        .companieslist {
            margin-top: -8%;
            text-align: center;
            position: absolute;
            margin-left: 19%;
            /* width: 100px!important; */
        }

        /* 1366 dell */
        @media only screen and (max-width: 1400px) {
          .title marquee {
                width: 138px !important;
             }
            #loading {
                position: fixed;
                width: 100%;
                height: 126vh;
                background: #fff url('https://vjf.skill.jobs/wp-content/uploads/2021/09/Virtual-Job-fest-2021-01.png') no-repeat center center;
                z-index: 9999;
                margin-top: -132px;
            }

            .card {
                width: 100%;
            }

            .stallimage {
                width: 620px;
            }

            .stall {
                position: absolute;
                margin-top: -404px;
                margin-left: 422px;
                font-size: 28px;
                font-weight: bold;
                color: black;
            }

            .logo {
                position: absolute;
                margin-top: -470px;
                margin-left: 162px;
                width: 75px;
            }

            .title {
                position: absolute;
                margin-top: -385px;
                margin-left: 258px;
                color: white;
                font-size: 18px;
            }

            .job {
                position: absolute;
                margin-top: -221px;
                margin-left: 270px;
                padding: 2px;
            }

            .avatar1 {
                position: absolute;
                margin-top: 217px;
                margin-left: 223px;
                padding: 9px;
                width: 350px;
            }

            .avatar2 {
                position: absolute;
                margin-top: 233px;
                margin-left: 300px;
                padding: 9px;
                width: 182px;
            }

            .navbuttons {
                position: absolute;
                z-index: 6;
                margin-left: 68%;
                margin-top: -1.3%;
            }
            .companieslist {
    margin-top: -10%;
    text-align: center;
    position: absolute;
    margin-left: 7%;
    /* width: 100px!important; */
}

.mainlogo {
    position: absolute;
    margin-top: 37%;
    margin-left: 42%;
    width: auto;
    border-radius: 10px;
}
           
        }

        /* dell 1280 sqare */

        @media only screen and (max-width: 1290px) {
            .card {
                width: 100%;
            }

            .stallimage {
                width: 620px;
            }

            .stall {
                position: absolute;
                margin-top: -404px;
                margin-left: 422px;
                font-size: 28px;
                font-weight: bold;
                color: black;
            }

            .logo {
                position: absolute;
                margin-top: -470px;
                margin-left: 162px;
                width: 75px;
            }

            .title {
                position: absolute;
                margin-top: -385px;
                margin-left: 258px;
                color: white;
                font-size: 18px;
            }

            .job {
                position: absolute;
                margin-top: -221px;
                margin-left: 270px;
                padding: 2px;
            }

            .avatar1 {
                position: absolute;
                margin-top: 217px;
                margin-left: 223px;
                padding: 9px;
                width: 350px;
            }

            .avatar2 {
                position: absolute;
                margin-top: 233px;
                margin-left: 300px;
                padding: 9px;
                width: 182px;
            }

            .navbuttons {
                position: absolute;
                z-index: 6;
                margin-left: 72%;
                margin-top: -1.3%;
            }
        }

        @media only screen and (max-width: 1000px) {

            .stallimage {
                width: 350px;
            }

            .stall {
                position: absolute;
                margin-top: -230px;
                margin-left: 749px;
                font-size: 17px;
                font-weight: bold;
                color: black;
            }

            .logo {
                position: absolute;
                margin-top: -266px;
                margin-left: 605px;
                width: 45px;
            }

            .title {
                position: absolute;
                margin-top: -219px;
                margin-left: 666px;
                color: white;
                font-size: 11px;
                width: 54px;
            }

            .title marquee {
                width: 80px;
            }

            .job {
                position: absolute;
                margin-top: -132px;
                margin-left: 650px;
                padding: 2px;
            }

            .avatar1 {
                position: absolute;
                margin-top: 117px;
                margin-left: 635px;
                padding: 9px;
                width: 210px;
            }

            .avatar2 {
                position: absolute;
                margin-top: 116px;
                margin-left: 676px;
                padding: 9px;
                width: 122px;
            }

            .navbuttons {
                position: absolute;
                z-index: 6;
                margin-left: 66%;
                margin-top: -1.3%;
            }

            .slick-prev {
                position: absolute;
                left: -17px;
            }

            .slick-next {
                right: -1px;
            }

            .btn-lg {
                font-size: 12px;
            }

            .multiple-items {
                margin-top: 24%;
            }
        }

        @media only screen and (max-width: 600px) {

            .navbuttons {
                position: absolute;
                z-index: 6;
                margin-left: 17%;
                margin-top: -2.3%;
            }

            .card {
                width: 100%;
            }

            .stallimage {
                width: 350px;
            }

            .stall {
                position: absolute;
                margin-top: -230px;
                margin-left: 237px;
                font-size: 17px;
                font-weight: bold;
                color: black;
            }

            .logo {
                position: absolute;
                margin-top: -268px;
                margin-left: 87px;
                width: 49px;
            }

            .title {
                position: absolute;
                margin-top: -220px;
                margin-left: 130px;
                color: white;
                font-size: 13px;
            }

            .job {
                position: absolute;
                margin-top: -130px;
                margin-left: 136px;
                padding: 2px;
                z-index: 9999;
            }

            .slick-prev {
                left: 7px;
            }

            .slick-next {
                right: -1px;
            }

            .toplogo {
                position: absolute;
                margin-top: -23%;
                width: 41%;
                margin-left: 31%;
                background: white;
                border-radius: 10px;
            }

            .mainlogo {
                position: absolute;
                margin-top: 330px;
                margin-left: 24%;
                width: auto;
                border-radius: 10px;
                background: white;
                border-radius: 10px;
            }

            .avatar1 {
                position: absolute;
                margin-top: 116px;
                margin-left: 118px;
                padding: 9px;
                width: 210px;
            }

            .avatar2 {
                position: absolute;
                margin-top: 135px;
                margin-left: 170px;
                padding: 9px;
                width: 103px;
            }

            .title marquee {
                width: 80px !important;
            }

            .multiple-items {
                margin-top: 132px;
            }

            .slick-prev {
                z-index: 9999;

            }
            .companieslist {
                    margin-top: -64px;
                    text-align: center;
                    margin-left: 0px !important;
                }
            #loading {
                position: fixed;
                width: 100%;
                height: 126vh;
                background: #fff url('https://vjf.skill.jobs/wp-content/uploads/2021/09/Virtual-Job-fest-2021-01.png') no-repeat center center;
                z-index: 9999;
                margin-top: -255px;
                background-size: 100% auto;
            }
        }
    </style>
</head>

<body>
    <div id="xloading"></div>

    <div>
        <img class="mainlogo" src="https://skill.jobs/img/logo.png" alt="" />
        <img class="toplogo items animate__animated animate__zoomIn" src="https://vjf.skill.jobs/wp-content/uploads/2021/09/Virtual-Job-fest-2021-01.png" alt="" />
        @if(Auth::check() && Auth::user()->status=="user")
        <div class="navbuttons">
            <a href="{{route('alljobs')}}" class="btn btn-success btn-lg">All Jobs</a>
            <a href="vjfservices" class="btn btn-warning btn-lg">Services</a>
            <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Profile</a>
            <a class="btn btn-danger btn-lg" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endif
        @if(Auth::check() && Auth::user()->status=="admin")
        <div class="navbuttons">
            <a href="{{ route('jobs.index') }}" class="btn btn-success btn-lg">All Jobs</a>
            <a href="{{ route('jobs.create') }}" class="btn btn-warning btn-lg">Create Jobs</a>
            <a href="{{ route('create_company') }}" class="btn btn-danger btn-lg">Create Company</a>
            <a href="{{ route('jobseekers') }}" class="btn btn-danger btn-lg">Jobseekers</a>
            <a class="btn btn-danger btn-lg" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endif
        @if(!Auth::check())
        <div class="navbuttons">
            <a href="{{route('login')}}" class="btn btn-success btn-lg">Login</a>
            <a href="/jobseeker/create" class="btn btn-danger btn-lg">Registration</a>
            <a href="vjfservices" class="btn btn-warning btn-lg">Services</a>
        </div>
        @endif
    </div>

    <div class="multiple-items items animate__animated animate__zoomIn">

        <?php $i = 0;$j=0; ?>
        @foreach($companies as $company)
        <?php $i++; $j++;
        if ($i > 3) {
            $i = 0;
        }

        ?>
        @if(($loop->index+1) %2 ==0)

        <!-- @ if(5)  -->
        <!--stall 1-->
        <div>
            <img class="avatar1" width="480px" src="./image/avatar1.gif" alt="{{ $company->id }}" />
            <img src="./image/new{{ $i+1 }}.png" alt="{{ $company->id }}" class="stallimage" />

            <img class="logo" width="100px" src="./logo/{{ $company->logo }}" alt="" />

            <p class="stall">#{{ $j }}</p>

            <a href="{{ route('company_jobs', $company->slug)}}" class="btn btn-primary job">View Jobs</a>
            <h4 class="title">
                <marquee>{{ $company->name }}</marquee>
            </h4>
        </div>
        @else
        <!--stall 2-->
        <div>
            <img class="avatar2" width="230px" src="./image/avatar2.gif" alt="{{ $company->id }}" />
            <img src="./image/new{{ $i+1 }}.png" alt="{{ $company->id }}" class="stallimage" />

            <img class="logo" width="100px" src="./logo/{{ $company->logo }}" alt="" />

            <p class="stall">#{{ $j }}</p>

            <a href="{{ route('company_jobs', $company->slug)}}" class="btn btn-primary job">View Jobs</a>
            <h4 class="title">
                <marquee>{{ $company->name }}</marquee>
            </h4>
        </div>
        <!--stall 2 end-->

        @endif
        <!--stall 1 end-->
        @endforeach













    </div>

  <div class="container companieslist">
      <div class="row">
          <div class="col-md-12">
          <label for="company">Select Comapany</label>
             
                <div class="form-group" >
                   
                    <select id="url" class="js-example-basic-multiple js-states form-control" name="company">
                    
                    @foreach($companies as $company)
                        <option value="{{ $company->slug }}">
                            {{ $company->name }}
                        </option>
                    @endforeach
                      

                    </select>
                    
                </div>

          </div>
      </div>
  </div>
   
</body>
<script>
    $(document).ready(function() {
        $(".multiple-items").slick({
            // lazyLoad: 'ondemand',
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: false,
            autoplaySpeed: 5000000000,

            dots: false,
            arrows: true,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        dots: false,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        dots: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery('#loading').fadeOut(4000);
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" defer></script>
<script>

    $(document).ready(function() {
            
            $(".js-example-basic-multiple").select2(); 
    });
</script>


<script>
    $(function(){
      // bind change event to select
      $('#url').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = "company/"+url; // redirect
          }
          return false;
      });
    });
</script>
</html>