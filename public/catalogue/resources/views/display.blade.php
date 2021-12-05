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
                                        <h1 class="fw-bolder mb-1">Anime Title</h1>
                                        <!-- Post meta content-->
                                        <div class="text-muted fst-italic mb-2">Season x - episode y</div>
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
                            <p class="fs-5 mb-4">Description : Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe. The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                        </section>
                    </article>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
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
                                    <!-- Comment with nested comments-->
                                    <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                        <div class="flex-shrink-0">
                                            <a href="otherprofilecomments.html">
                                                <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                            </a>
                                        </div>
                                        <div class="ms-3 text-white">
                                            <a href="otherprofilecomments.html">
                                                <div class="fw-bold text-primary">Commenter Name</div>
                                            </a>
                                            If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                            <!-- Child comment 1-->
                                            <div class="d-flex mt-4">
                                                <a href="otherprofilecomments.html" style="text-decoration:none;">
                                                    <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                                </a>
                                                <div class="ms-3 text-white">
                                                    <a href="otherprofilecomments.html">
                                                        <div class="fw-bold text-primary">Commenter Name</div>
                                                    </a>
                                                    And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                                </div>
                                            </div>
                                            <!-- Child comment 2-->
                                            <div class="d-flex mt-4">
                                                <a href="otherprofilecomments.html">
                                                    <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                                </a>
                                                <div class="ms-3 text-white">
                                                    <a href="otherprofilecomments.html">
                                                        <div class="fw-bold text-primary">Commenter Name</div>
                                                    </a>
                                                    When you put money directly to a problem, it makes a good headline.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single comment-->
                                    <div class="d-flex">
                                        <a href="otherprofilecomments.html">
                                            <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                        </a>                                        <div class="ms-3 text-white">
                                            <a href="otherprofilecomments.html">
                                                <div class="fw-bold text-primary">Commenter Name</div>
                                            </a>
                                            When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence. If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.
                                        </div>
                                    </div>
                                </div>
                                <div id="Next episodes" class="tabcontent">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <figure class="mb-4">
                                                    <img class="img-fluid rounded" src="https://dummyimage.com/140x95/ced4da/6c757d.jpg" alt="..." />
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <div class="text-white">
                                                    Episode description.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
