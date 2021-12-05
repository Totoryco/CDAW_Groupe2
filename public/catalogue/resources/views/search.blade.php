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
                        <form action="{{ action('App\Http\Controllers\HomeController@search2') }}">
                            <li class="nav-item dropdown mr-auto">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Choose an animation studios</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                        <div id="list1" class="dropdown-check-list" tabindex="100">
                                            <span class="anchor">Select studios</span>
                                            <ul class="items">
                                                @foreach($studios as $studio)
                                                    <li><input type="checkbox" name="studio[]" value="{{$studio->name}}" /> &nbsp {{$studio->name}} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </ul>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mr-auto">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Choose an anime genre</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                        <div id="list1" class="dropdown-check-list" tabindex="100">
                                            <span class="anchor">Select genre</span>
                                            <ul class="items">
                                                @foreach($genres as $genre)
                                                    <li><input type="checkbox" name="genre[]" value="{{$genre->name}}" /> &nbsp {{$genre->name}} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </ul>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mr-auto">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Order of the results</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                        <div id="list1" class="dropdown-check-list" tabindex="100">
                                            <span class="anchor">Sort by</span>
                                            <ul class="items">
                                            <li><input type="checkbox" name="sortby[]" value="Yes"/> &nbsp Latest </li>
                                            <li><input type="checkbox" name="sortby[]" value="Yes"/> &nbsp Newest</li>
                                            <li><input type="checkbox" name="sortby[]" value="Yes"/> &nbsp Popularity </li>
                                            </ul>
                                        </div>
                                    </ul>
                                </ul>
                            </li>
                            <div class="search">
                                
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                        <button class="btn btn-primary" id="btnNavbarSearch" type="button" href="{{ route('search2') }}"><i class="fa fa-search"></i></button>
                                    </div>
                                
                            </div>
                        </form>
                    </ul>

                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ms-lg-4">
                    <!--Rigth align section-->    
                    </ul>
                </div>
            </div>
        </nav>

   
@stop
