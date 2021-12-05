@extends('template')

@section('cards')
    @parent
    <!--Séparation de la page -->
    <header class="bg-secondary py-1">
            <div class="container px-4 px-lg-5">
                <div class="text-left">
                    <h1 class="display-5 fw-bolder">{{ $title }}</h1> 
                </div>
            </div>
        </header>

    @if($title="Search")
        @yield('search')
    @endif

    <div class="grille">
        <div class="grille-display mx-grid">
            @foreach ($data as $anime)
            <!-- Item -->
            <div class="col mb-5">
                <div class="card-row">
                    <div class="card card-format">
                            <div class="container slide slide1">
                                <!-- Product image-->
                            <a href="{{action('App\Http\Controllers\HomeController@display', $post['id'] = $anime->episode) }}">
                                <img class="card-img-top" src="{{ $anime->image }}" alt="..." />
                                </a>
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $anime->name }}</h5>
                                        <!-- Product description-->
                                        <h6>{{$anime->date}}</h6>
                                        <h6>{{$anime->number}} seasons</h6> 
                                        <h6>@if(isset($anime->likes))
                                                {{$anime->likes}}
                                            @endif 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <!-- Bottom Button-->
                        <div class="card-footer bg-dark slide slide2">
                            @if(!is_null(Auth::user()))
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
                            <div class="dropdown mr-auto">
                                <a class="btn mt-auto" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-list-ul icon-card-format"></i>
                                <span class="slide4" style="padding: -5px 0;">
                                    <p class="text text-black mx-3 my-1 fw-bold">Add to playlist</p>
                                </span></a>
                                <ul class="dropdown-menu" style="width: 15rem;">
                                    @foreach($myplaylists as $playlist)
                                    @php
                                        $array = [$playlist->name, $anime->id];
                                    @endphp
                                                        <li><a class="dropdown-item" href="{{action('App\Http\Controllers\ActionsController@adding',['playlistname'=> $playlist->name,'animeid'=>$anime->id] )}}">&nbsp {{$playlist->name}}</a></li>
                                    @endforeach
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><div class="search dropdown-item" style="margin: auto;">
                                        <form action="{{ action('App\Http\Controllers\ActionsController@newplaylist') }}">
                                            <div class="input-group">
                                                <input class="form-control" type="text" name='playlist' placeholder="New name" />
                                                <button class="btn btn-primary" type="button" href="#"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </form>
                                    </div></li>
                                </ul>
                            </div>
                            @else
                            <p class="text text-white mx-3 my-1 fw-bold">Please login or register</p>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Side Text on hover-->
                    <div class="slide slide3">
                        <p class="text text-white">
                        @if(isset($anime->description))
                            {{$anime->description}}
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
