<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Party Management Tool</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Soirée<span class="sr-only">(current)</span></a></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#upcoming">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#past">Past</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" placeholder="Search for ..." aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
</div>
    <div class="container" id="upcoming">
        <div class="card mt-4 mb-5 border-0 jumbotron">
            <div class="card-body">
                <h6><span class="badge badge-dark mt-1 mb-2">Upcoming Events</span></h6>
                <h1 class="display-4 mb-4">Retro Night</h1>
                    <p class="card-text mt-4 mb-4">Hey dudes and dudettes, we're gona have a retro night with wine, cheese and a huge selection of the Beatles, Bob Dylan and Dire Straits. Be sure to register and dress up like you travelled to the 80's</p>
                        <hr>
                    <h6><span><i class="fas fa-calendar-alt mb-3 mt-3"></i>&nbsp;2nd August, 2018</span></h6>
                    <h6><span><i class="fas fa-map-marker-alt"></i>&nbsp;ColoredCow, Gurgaon</span></h6>
                <div class="mt-5">
                    <a class="btn btn-primary " href="#" role="button" data-toggle="modal" data-target="#RSVPModal"><i class="fas fa-concierge-bell"></i> I want to attend</a>
                        <a class="btn btn-secondary " href="#" role="button"><i class="fas fa-share"></i> Share it with a Friend!</a>
                </div>
            </div>
        </div>
        <hr>
<!--Past Events -->
            <div class="container" id="past">
                <div class="row mb-5">
                <h1 class="display-4"> Past Events </h1>
                        <div class="row" id="pastEvents"></div>
                </div>
            </div>
        <hr>
        <!-- Gallery -->
        <div class="contrainer" id="gallery">
            <h1 class="display-4 mt-4"> Gallery </h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" id="carousel">
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

     <div class="modal fade" id="RSVPModal" tabindex="-1" role="dialog" aria-labelledby="RSVPModel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-concierge-bell"></i> I want to attend</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row align-items-center">
                    <div class="col">
                        <label class="sr-only" for="inlineFormInputGroup">Name</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-row align-items-center">
                <div class="col">
                <label class="sr-only" for="inlineFormInputGroup">Phone</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                    </div>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Maybe next time</button>
            <button type="button" class="btn btn-primary" onclick="displayData()">Yes, I want to attend</button>
        </div>
        </div>
    </div>
    </div>

    <!-- javascript -->

    <script>
    $(document).ready(function() {
        showEvents();
        showCarousel();
    })

       function displayData(){
            let name = document.getElementById('name').value;
            let phone = document.getElementById('phone').value;
            console.log(name);
            console.log(phone);
        }

        //for carousel
        var active = 0;
        function showCarousel(){
            let scrolls =document.getElementById('carousel');
            let scrollArray =[
                {
                    'img' : 'https://www.w3schools.com/bootstrap/chicago.jpg',
                },
                {
                    'img' : 'https://www.w3schools.com/bootstrap/la.jpg',
                },
                {
                    'img' : 'https://www.w3schools.com/bootstrap/ny.jpg',
                },
            ];
            scrollArray.forEach(function(scroll){
                console.log(scroll);
                scrolls.innerHTML += displayScrollImg(scroll['img']);
                active += 1;
            });
        }

            function displayScrollImg(img) {
            let html = '';
                if (active == 0)
                    {
                        html +='<div class="carousel-item active">';
                    }
                else
                    {
                        html +='<div class="carousel-item">';
                    }
                html += '    <img class="bg-dark text-white text-center display-4 d-block w-100" src='+img+'" alt="Slide image'+active+'" height="300px;">';
                html += '</div>';
                return html;
            }

        //for pastevent
        function showEvents () {
            let events =  document.getElementById('pastEvents');
            let eventsArray = [
                {
                    'img' : 'https://media.istockphoto.com/photos/new-years-selfie-picture-id497541900?s=170x170',
                    'date' : '3rd August, 2018',
                    'location' : 'Gurgaon'
                },
                {
                    'img' : 'http://www.theholidayspot.com/friendship/images/friendship-day-party-ideas.jpg',
                    'date' : '4th August, 2017',
                    'location' : 'Gurgaon'
                },
                {
                    'img' : 'https://blogs.universal.org/bispomacedo/wp-content/uploads/2015/12/festa-706x410.jpg',
                    'date' : '5th August, 2017',
                    'location' : 'Gurgaon'
                }
            ];

            eventsArray.forEach(function(event){
                console.log(event);
                events.innerHTML += displayPastEvents(event['img'], event['date'], event['location']);
            });

            function displayPastEvents(img, date, location) {
            let html = '';
                html += '<div class="col-4">';
                html += '    <div class="card">';
                html += '        <img class="card-img-top" src="' + img + '" alt="Card image cap">';
                html += '        <div class="card-body">';
                html += '            <p class="card-title"><i class="fas fa-calendar-alt"></i> ' + date + '</p>';
                html += '            <p class="card-text"><i class="fas fa-map-marker-alt"></i> ' + location + '</p>';
                html += '        </div>';
                html += '    </div>';
                html += '</div>';
                return html;
            }
        }
    </script>
  </body>
</html>
