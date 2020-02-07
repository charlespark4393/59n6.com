<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>59N6.com</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="jumbotron col-12 mb-0">

                    <div class="display-3 text-center text-dark">
                        <h1 class="display-3">59N6.com</h1>
                    </div>
                </div>
            </div>
        </header>

        {{--main picture--}}
        <div>
            <img class="img-fluid height-50" src="{{ asset('images/5.jpg') }}">
        </div>

        <div class="row">
            <div class="jumbotron col-12 mb-0">
                <div class="display-3 text-center text-dark" style="font-size:2.0rem;letter-spacing:-2px;line-height:.7 !important;">
                    <h1 class="mb-0"><span style="font-size:2.0rem;letter-spacing:-2px;line-height:.7 !important;">RETAIL</span></h1>
                    <h1 class="mb-0"><span style="font-size:2.0rem;letter-spacing:-2px;line-height:.7; !important">FOR LEASE</span></h1>
                    <h1><span style="font-size:2.0rem;letter-spacing:-2px;line-height:.7 !important;"><a href="tel:19147609600">914-760-9600</a></span></h1>
                </div>

                    <h1 class="text-center text-dark">
                        <p>61N 6th Ground Level 4,200 sq.ft. with 21.5 ft ceiling height / basement level 3,300 sq. ft. with 10 ft ceiling height,</p>
                        {{--<p>$300 per sq. ft.</p>--}}
                    </h1>
                    <h1 class="text-center text-dark">
                        <p>63N 6th Ground level 3,300 sq.ft. with 20 sq ft ceiling height / basement level 3,300 sq. ft. with 10 ft ceiling height,</p>
                        {{--<p>300$ per sq. ft.</p>--}}


                    </h1>
            </div>
        </div>

        <div class="row">
            <div class="jumbotron col-12 mb-0 bg-light">
                <div class="display-3 text-center text-dark">
                    <h1 class="display-3">Portfolio</h1>
                </div>

                <div id="carousel2" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner" >
                        <div class="carousel-item center-block active">
                            <img class="d-block img-fluid" src="{{ asset('images/a.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid" src="{{ asset('images/b.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid" src="{{ asset('images/c.jpg') }}">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-primary" href="#carousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon text-primary" aria-hidden="true"></span>
                        <span class="sr-only text-primary">Next</span>
                    </a>
                </div>
            </div>
        </div>

        {{--<div class="row">--}}
            {{--<div class="jumbotron col-12 mb-0 bg-dark">--}}
                {{--<div class="center-block jumbotron col-8 bg-primary display-4 bg-light text-center marginauto">--}}

                    {{--<div class="title m-b-md display-3 text-center text-dark underlinecolor">--}}
                        {{--CONTACT US--}}
                    {{--</div>--}}
                    {{--1-914-760-9600--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>


    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <script>
        $('#carousel').carousel({
            interval: 5000
        })
        $('#carousel2').carousel({
            interval: 5000
        });
    </script>
    </body>
</html>
