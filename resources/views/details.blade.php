<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $job->title }} At {{  \App\Models\Company::find($job->company)->name }} Apply Before: {{ $job->last_date }}  | DIU Job Utsob</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
      body {
        /* background: url("/image//back2.jpg") no-repeat center center fixed; */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background: #dfe6e9;
      }
      .card {
          opacity: .9;
      }
      .job {
          margin-top: 5%;
      }
      .logo {
          width: 200px!important;
          margin: 0px auto;
          padding: 10px;
      }
      .card {
            width:40rem;
            box-shadow: 0px 2px #3498db;
        }
      @media only screen and (max-width: 600px) {
        .card {
            width: 100%;
        }
       }

       .badge {

    font-size: 100%; 
} 



.glow {
  font-size: 26px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  } }
    </style>
  </head>
  <body>
    <div class="container ">
      <div class="">
        <br><br><br><br>
        <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-6">
            <div class="card animate__animated animate__zoomIn" style="box-shadow: 0px 2px #3498db;">
               

              <img
                class="card-img-top logo"
                src="/logo/{{  \App\Models\Company::find($job->company)->logo }}"
                alt="{{  \App\Models\Company::find($job->company)->name }}"
               
              />
              
              <div class="col-md-6">
              <a href="{{ route('jobs.show',$job->id) }}" 
              class="btn btn-danger   animate__animated animate__zoomIn glow">Click Here To Apply</a>
              </div>
              

              <div class="card-body">
                <h6 class="card-title">Company:  <span class="badge badge-pill badge-success">{{  \App\Models\Company::find($job->company)->name }}</span> |
                    <a href="{{ route('company_jobs',\App\Models\Company::find($job->company)->slug) }}" class="badge badge-pill badge-success btn-sm ">View Other Jobs</a> 
                   

                </h6>
                <p class="card-text">
                    <div class="list-group">
                        <div class="job">
                            <div class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">{{ $job->title }}</h5>
                                  <small style="color:red;font-weight: bold;">Last Date: {{ $job->last_date }}</small>
                                </div>
                                <p class="mb-1">
                                {!! $job->description !!}
                                </p>
                              </div>
                        </div>
                        
                      
                 
                        
                 
                      </div>
                </p>
                <a href="/alljob" class="badge badge-pill badge-primary "> Back To Home</a>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
          
          
        </div>
      </div>
    </div>
  </body>
</html>





