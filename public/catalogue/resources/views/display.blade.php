@extends('template')

@section('display')
    @parent
    <!-- Page content-->
    <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <div class="container">
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">{{ $episode[0]->anime }} : {{ $episode[0]->title }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Season {{ $episode[0]->seasonnumber }} - episode {{ $episode[0]->episodenumber }}</div>
                            </header>
                        </div>
                        <!-- Preview image figure-->
                        <div class="mb-4" style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
                            <iframe src="https://streamable.com/e/shil2" frameborder="0" width="100%" height="100%" allowfullscreen style="width: 100%; height: 100%; position: absolute;">
                            </iframe>
                            </div>

                            <div class="container" >
                                <div class="row">

                                    <div class="col">
                                        <div class="row"> 
                                            <a class="fa fa-thumbs-up fa-2x text-center" style="color:green;"> </a>
                                        </div>
                                        <div class="row">
                                            <h7 class="text-center">{{$like->likes}} likes</h7>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row"> 
                                            <a class="fa fa-thumbs-down fa-2x text-center" style="color:red;"> </a>
                                        </div>
                                        <div class="row">
                                        <h7 class="text-center">{{$dislike->dislikes}} dislikes</h7>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row" style="margin: auto"> 
                                            <div class="dropdown">
                                            <a class="btn" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="fa fa-list-ul fa-2x"></span></a>
                                            <ul class="dropdown-menu" style="width: 15rem;">
                                                @foreach($myplaylists as $playlist)
                                                @php
                                                    $array = [$playlist->name, $episode[0]->id];
                                                @endphp
                                                <li><a class="dropdown-item" href="{{action('App\Http\Controllers\ActionsController@adding',['playlistname'=> $playlist->name,'animeid'=>$episode[0]->id] )}}">&nbsp {{$playlist->name}}</a></li>
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
                                        </div>
                                        <div class="row">
                                        <h7 class="text-center">Add to Playlist</h7>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row"> 
                                            <a class="fa fa-cog fa-2x text-center" style="color:grey;"> </a>
                                        </div>
                                        <div class="row">
                                        <h7 class="text-center">Settings</h7>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Some anime spec</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Other anime spec</a>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Description : {{ $episode[0]->description }}</p>
                        </section>
                    </article>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4" style="max-height: 85rem; overflow: auto; margin-bottom: 2rem;">
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="bg-dark card">
                            <div class="card-body">
                                <div class="tab">
                                    <button class="tablinks" onclick="openSection(event, 'Next episodes')">Next episodes</button>
                                    <button class="tablinks" onclick="openSection(event, 'Comment section')">Comment section</button>
                                </div>
                                <div id="Comment section" class="tabcontent">
                                    <!-- Comment form-->
                                    <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                    @foreach ($comments as $comment)
                                    <!-- Single comment-->
                                    <div class="d-flex mb-4">
                                        <img class="rounded-circle" style="max-width: 50px; max-height: 50px;" src="{{asset('../public/images/').'/'.$comment->avatar}}" alt="..." />
                                        <div class="ms-3 text-white">
                                            <div class="fw-bold text-primary">
                                                {{$comment->pseudo}}
                                            </div>
                                            {{$comment->description}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                                <div id="Next episodes" class="tabcontent">
                                    @foreach ($data as $other)
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <a href="{{action('App\Http\Controllers\HomeController@display', $post['id'] = $other->id) }}">
                                                        <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode {{$other->number}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Tab script-->
        <script>
            function openSection(evt, sectionName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(sectionName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            openSection(event, 'Next episodes');
            </script>
@stop
