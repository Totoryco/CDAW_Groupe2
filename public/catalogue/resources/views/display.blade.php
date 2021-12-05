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
                            <div class="row">
                                <!-- Post header-->
                                <div class="col">
                                    <header class="mb-4">
                                        <!-- Post title-->
                                        <h1 class="fw-bolder mb-1">{{ $episode[0]->anime }} : {{ $episode[0]->title }}</h1>
                                        <!-- Post meta content-->
                                        <div class="text-muted fst-italic mb-2">Season {{ $episode[0]->seasonnumber }} - episode {{ $episode[0]->episodenumber }}</div>
                                    </header>
                                </div>
                                <div class="col">
                                    <i class="fa fa-thumbs-up" style="font-size:48px;color:green;"></i>
                                    <i class="fa fa-thumbs-down" style="font-size:48px;color:red;"></i>
                                    add to playlist 
                                    <i class="fa fa-plus" style="font-size:32px;"></i>
                                    settings 
                                    <i class="fa fa-cog" style="font-size:32px;color:gray;"></i>
                                    <div class="text-black"> 304 &emsp;&ensp; 16 </div>
                                </div>
                            </div>
                        </div>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x700/ced4da/6c757d.jpg" alt="..." /></figure>
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
                                    <div class="d-flex">
                                        <img class="rounded-circle" src="{{asset('../public/images/').'/'.$comment->avatar}}" alt="..." />
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
                                                    Episode number {{$other->number}}
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
