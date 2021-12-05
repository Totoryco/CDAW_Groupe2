@extends('cardTemplate')

@section('search')
    @parent
    <!--Barre de recherche avancée -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Research</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Type</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <div id="list1" class="dropdown-check-list" tabindex="100">
                                        <span class="anchor">Select type</span>
                                        <ul class="items">
                                          <li><input type="checkbox" />  &nbsp Movies </li>
                                          <li><input type="checkbox" /> &nbsp Series</li>
                                        </ul>
                                    </div>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Year</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <div id="list1" class="dropdown-check-list" tabindex="100">
                                        <span class="anchor">Select years</span>
                                        <ul class="items">
                                          <li><input type="checkbox" /> &nbsp 2021 </li>
                                          <li><input type="checkbox" /> &nbsp 2020</li>
                                          <li><input type="checkbox" /> &nbsp 2019 </li>
                                          <li><input type="checkbox" /> &nbsp 2018 </li>
                                          <li><input type="checkbox" /> &nbsp 2017 </li>
                                          <li><input type="checkbox" /> &nbsp 2016 </li>
                                          <li><input type="checkbox" /> &nbsp 2015</li>
                                        </ul>
                                    </div>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Genre</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <div id="list1" class="dropdown-check-list" tabindex="100">
                                        <span class="anchor">Select genre</span>
                                        <ul class="items">
                                          <li><input type="checkbox" />  &nbsp Action </li>
                                          <li><input type="checkbox" />  &nbsp Isekai</li>
                                          <li><input type="checkbox" /> &nbsp Shojo </li>
                                          <li><input type="checkbox" /> &nbsp Seinen </li>
                                          <li><input type="checkbox" /> &nbsp Banana </li>
                                          <li><input type="checkbox" /> &nbsp Shonen </li>
                                          <li><input type="checkbox" /> &nbsp Sasagayo</li>
                                        </ul>
                                    </div>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sort by</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <div id="list1" class="dropdown-check-list" tabindex="100">
                                        <span class="anchor">Sort by</span>
                                        <ul class="items">
                                          <li><input type="checkbox" /> &nbsp Latest </li>
                                          <li><input type="checkbox" /> &nbsp Newest</li>
                                          <li><input type="checkbox" /> &nbsp Popularity </li>
                                        </ul>
                                    </div>
                                </ul>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mr-auto">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Must be</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <div id="list1" class="dropdown-check-list" tabindex="100">
                                        <span class="anchor">Must be</span>
                                        <ul class="items">
                                          <li><input type="checkbox" /> &nbsp Complete </li>
                                          <li><input type="checkbox" /> &nbsp Ongoing</li>
                                        </ul>
                                    </div>
                                </ul>
                            </ul>
                        </li>
                        <div class="search">
                            <form action="search.html">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                    <button class="btn btn-primary" id="btnNavbarSearch" type="button" href="lobby.html"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </ul>

                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ms-lg-4">
                    <!--Rigth align section-->    
                    </ul>
                </div>
            </div>
        </nav>

   
@stop
