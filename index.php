<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Party Management Tool</title>
    </head>
    <body>
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Soirée<span class="sr-only">(current)</span></a></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Past</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" placeholder="Search for ..." aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>

    <div class="container">

        <div class="card mt-4 mb-5 border-0 jumbotron">
            <div class="card-body">
                <h6><span class="badge badge-dark mt-1 mb-2">Upcoming Events</span></h6>
                <h1 class="display-4 mb-4">Retro Night</h1>
                    <p class="card-text mt-4 mb-4">Hey dudes and dudettes, we're gona have a retro night with wine, cheese and a huge selection of the Beatles, Bob Dylan and Dire Straits. Be sure to register and dress up like you travelled to the 80's</p>
                        <hr>
                    <h6><span><i class="fas fa-calendar-alt mb-3 mt-3"></i>&nbsp;2nd August, 2018</span></h6>
                    <h6><span><i class="fas fa-map-marker-alt"></i>&nbsp;ColoredCow, Gurgaon</span></h6>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary"><i class="fas fa-concierge-bell"></i>&nbsp; I want to attend</a>
                    <a href="#" class="btn btn-secondary"><i class="fas fa-share"></i>&nbsp;Share with your friends</a>
                </div>
            </div>
        </div>
        <hr>
<!--Past Events -->
            <h1 class="mt-4 display-4"> Past Events </h1>
                <div class="row mb-5">
                    <div class="col-sm-4">
                        <div class="card width-18rem">
                            <img class="card-img-top" src="https://media.istockphoto.com/photos/new-years-selfie-picture-id497541900?s=170x170" alt="Card image cap">
                        <div class="card-body">
                            <h6><span><i class="fas fa-calendar-alt"></i>&nbsp;2nd August, 2018</span></h6>
                            <h6><span><i class="fas fa-map-marker-alt"></i>&nbsp;ColoredCow, Gurgaon</span></h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card width-18rem"">
                            <img class="card-img-top" src="https://blogs.universal.org/bispomacedo/wp-content/uploads/2015/12/festa-706x410.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6><span><i class="fas fa-calendar-alt"></i>&nbsp;2nd August, 2018</span></h6>
                            <h6><span><i class="fas fa-map-marker-alt"></i>&nbsp;ColoredCow, Gurgaon</span></h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card width-18rem">
                            <img class="card-img-top" src="http://www.theholidayspot.com/friendship/images/friendship-day-party-ideas.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h6><span><i class="fas fa-calendar-alt"></i>&nbsp;2nd August, 2018</span></h6>
                            <h6><span><i class="fas fa-map-marker-alt"></i>&nbsp;ColoredCow, Gurgaon</span></h6>
                        </div>
                        </div>
                    </div>
                </div>
        <hr>
        <!-- Gallery -->
        <div class="contrainer-fluid">
            <h1 class="display-4 mt-4"> Gallery </h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="First slide" height="300px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.w3schools.com/bootstrap/la.jpg" alt="Second slide"  height="300px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Third slide" height="300px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <!-- footer starts-->

    <div class="container-fluid text-center bg-light mt-5">
        <div class="row justify-content-md-center">
            <div class="col-10 text-muted text-center p-2">
                <i class="fas fa-award text-warning"></i> Day 1 at <a href="#">FrontEnd Bootcamp, CodeTrek</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
