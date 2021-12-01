@extends('template')

@section('cards')
    @parent
    <div class="grille">
        <div class="grille-display">
            @foreach ($data as $anime)

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
                                    <h5 class="fw-bolder">{{ $anime->name }}</h5>
                                    <!-- Product description-->
                                    <h6>{{$anime->date}}</h6>
                                    <h6>{{$anime->number}} seasons</h6> 
                                    <h6>{{ $anime->likes }} Likes</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Bottom Button-->
                        <div class="card-footer bg-dark slide slide2">
                            <a class="btn mt-auto">
                            <i class="fa fa-thumbs-up icon-card-format" onmouseover="javascript:DisplaySlide('slide4_like');" onmouseleave="javascript:DontDisplaySlide('slide4_like');"></i></a>
                                
                            <a class="btn mt-auto">
                            <i class="fa fa-thumbs-down icon-card-format" onmouseover="javascript:DisplaySlide('slide4_dislike');" onmouseleave="javascript:DontDisplaySlide('slide4_dislike');"></i></a>

                            <a class="btn mt-auto" >
                            <i class="fa fa-list-ul icon-card-format" onmouseover="javascript:DisplaySlide('slide4_addToPlaylist');" onmouseleave="javascript:DontDisplaySlide('slide4_addToPlaylist');"></i></a>
                        </div>
                        <div class="slide4" id="slide4_like" style="margin-left: 1.6rem;">
                            <p class="text text-black mx-3 my-1 fw-bold">I like this</p>
                        </div>
                        <div class="slide4" id="slide4_dislike" style="margin-left: 3.7rem;">
                            <p class="text text-black mx-3 my-1 fw-bold">Not for me</p>
                        </div>
                        <div class="slide4" id="slide4_addToPlaylist" style="margin-left: 5.4rem;">
                            <p class="text text-black mx-3 my-1 fw-bold">Add to playlist</p>
                        </div>
                    </div>

                    <!-- Side Text on hover-->
                    <div class="slide slide3">
                        <p class="text text-white">
                        @if(isset($variable))
                            {{ $anime->description}}
                        @else
                            This anime doesn't have a description in our data
                        @endif
                        </p>
                    </div>
                    <script src="{{asset('../resources/js/scripts.js')}}" defer></script>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
