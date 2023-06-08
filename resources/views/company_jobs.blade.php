<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Find {{ $company->name }} Jobs</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      body {
        background: url("/image/back2.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
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
           opacity: .9;
            width:30rem;
            box-shadow: 10px 10px #3498db;
      }
      @media only screen and (max-width: 600px) {
        .card {
            width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container ">
      <br><br><br><br>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
          <div class="card animate__animated animate__zoomIn animation-duration: 10s" >
            <img class="card-img-top logo" src="/logo/{{ $company->logo }}" alt="{{ $company->name }}"/>
            <div class="card-body">
              <h5 class="card-title">Job(s) From {{ $company->name }}
                <span class="badge badge-pill badge-primary">{{ $jobs->count() }}</span>
                <a href="/alljob" class="badge badge-pill badge-success btn-sm ">View All Jobs</a>
              </h5>
              <p class="card-text">
                @foreach($jobs as $job)
                <div class="list-group">
                  <div class="job">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $job->title }}</h5>
                        <small>Last Date: {{ $job->last_date }}</small>
                      </div>
                      <p class="mb-1">{!! $job->short_description !!}</p>
                        <a href="{{ route('details',$job->id) }}" class="btn btn-primary btn-sm btn-block">View & Apply</a>
                    </a>
                  </div>
                  @endforeach
                </div>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div> 
      </div>
    </div>
  </body>
</html>
