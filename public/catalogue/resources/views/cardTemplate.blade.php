<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Card Template view</title>

    </head>
    <body>
        @extends('template')

        @section('content')

        @section('cards')
            @parent
            <!-- Item -->

            <div class="col mb-5">
                <div class="card card-format">
                    <div class="container slide slide1">
                        <!-- Product image-->
                    <a href="display.html">
                        <img class="card-img-top" src="https://fond-ecran-manga.fr/wp-content/uploads/2020/04/Assassination-Classroom-Nagisa-Karma-Korosensei-Poster-by-450x600.png" alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Name of the anime</h5>
                                <!-- Product description-->
                                Date - X episodes
                                <h6>Genres</h6>
                                <hr>
                                <h6>X Likes</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Button-->
                    <div class="card-footer bg-dark slide slide2">
                        <a class="btn mt-auto" href="#3">
                            <i class="fa fa-thumbs-up icon-card-format">
                        </i></a>
                        <a class="btn mt-auto" href="#3">
                            <i class="fa fa-thumbs-down icon-card-format">
                        </i></a>
                        <a class="btn mt-auto" href="#3">
                            <i class="fa fa-list-ul icon-card-format">
                        </i></a>
                    </div>
                </div>
            </div>
        @stop
    </body>
</html>
