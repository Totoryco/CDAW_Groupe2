@extends('template')

@section('cards')
    @parent
    <!-- Item -->
    <div class="col mb-5">
        <div class="card-row">
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
                    <a class="btn mt-auto" >
                    <i class="fa fa-thumbs-up icon-card-format"></i>
                    <span class="slide4" style="bottom: 100%; left: 50%; margin-left: -60px;">
                        <p class="text text-black mx-3 my-1 fw-bold">I like this</p>
                    </span></a>
                    <a class="btn mt-auto">
                    <i class="fa fa-thumbs-down icon-card-format"></i>
                    <span class="slide4" style="padding: -5px 0;">
                        <p class="text text-black mx-3 my-1 fw-bold">Not for me</p>
                    </span></a>
                    <a class="btn mt-auto" >
                    <i class="fa fa-list-ul icon-card-format"></i>
                    <span class="slide4" style="padding: -5px 0;">
                        <p class="text text-black mx-3 my-1 fw-bold">Add to playlist</p>
                    </span></a>
                </div>
            </div>

            <!-- Side Text on hover-->
            <div class="slide slide3">
                <p class="text text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            </div>
            <script src="{{asset('../resources/js/scripts.js')}}" defer></script>
        </div>
    </div>
@stop
