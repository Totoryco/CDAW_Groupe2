@extends('template')

@section('profile')
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="profile-pic-div">
                                <!--Changer ici pour avoir la profile pict et celle par def (avatar image img)-->
                                <a href="{{ route('avatarForm') }}" title="Choose photo">
                                    @php
                                    $avatar = Auth::user()->avatar
                                    @endphp
                                    <img src="{{asset('../public/images/').'/'.$avatar}}" style="max-width:100%;">                       
                                    <label for="file" id="uploadBtn">Choose Photo</label>
                                </a>
                                <!--
                                <img src="{{asset('../public/images/image.jpg')}}" id="photo">
                                <label for="file" id="uploadBtn">Choose Photo</label>
                               <input type="file" id="file">
                                <a href="{{ route('avatarForm') }}" id="file" class="btn btn-xs btn-info pull-right">Edit</a>-->
                            </div>

                            <div class="sb-sidenav-menu-heading" style="margin-top: 200px;">My Profile</div>
                            <a class="nav-link" href="{{ route('updateprofileForm') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                                {{ Auth::user()->pseudo }}
                            </a>
                            <a class="nav-link" href="{{ route('updateprofileForm') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-globe"></i></div>
                                {{ (Auth::user()->location) != NULL ? Auth::user()->location : 'Location' }}
                            </a>
                            <a class="nav-link" href="{{ route('updateprofileForm') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-envelope"></i></div>
                                {{ Auth::user()->email }}
                            </a>
                            <div class="sb-sidenav-menu-heading">Activities</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Followed animes
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
                                Friends
                            </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anime random statistics</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Since (first login)</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Liked</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('profile2') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Disliked</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('profile3') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Seen</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('profile') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">From my playlists</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('profile4') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Screen Time Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Number of animes Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                History : the episodes you have recently seen
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Studio</th>
                                            <th>Country</th>
                                            <th>Last seen</th>
                                            <th>Season</th>
                                            <th>Episode</th>
                                            <th>My opinion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Studio</th>
                                            <th>Country</th>
                                            <th>Last seen</th>
                                            <th>Season</th>
                                            <th>Episode</th>
                                            <th>My opinion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data as $anime)
                                        <tr>
                                            <td>{{$anime->name}}</td>
                                            <td>{{$anime->animestudio}}</td>
                                            <td>{{$anime->country}}</td>
                                            <td>
                                            @if(isset($anime->date))
                                                {{$anime->date}}
                                            @else
                                                Never seen
                                            @endif
                                            </td>
                                            <td>{{$anime->seasonnumber}}</td>
                                            <td>{{$anime->episodenumber}}</td>
                                            <td>
                                            @if(($anime->likes)==1)
                                                Liked
                                            @else
                                                @if(($anime->likes)==-1)
                                                    Disliked
                                                @else
                                                    None
                                                @endif
                                            @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.js"></script>
        <script src="{{asset('../resources/js/datatables-simple-demo.js')}}"></script><!--"js/datatables-simple-demo.js"></script>-->
@endsection

@section('profilejs')
    <script src="{{asset('../resources/js/profile.js')}}" defer></script>
@endsection