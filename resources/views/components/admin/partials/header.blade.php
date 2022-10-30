<div class="main-header bg-light">
    <div class="logo-header text-dark">

        Dashboard

        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
    </div>
    <nav class="navbar navbar-header navbar-expand-lg">
        <div class="container-fluid">

            <form class="navbar-left navbar-form nav-search mr-md-3" method="get" action="">
                <div class="input-group">
                    <input type="search" name="query" placeholder="Search ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                @php
                $notifications = Auth::user()->unreadNotifications;
                @endphp
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-bell text-warning"></i>
                        <span class="notification">{{$notifications? $notifications->count() : 0 }}</span>
                    </a>
                    <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">

                        <li>
                            <div class="dropdown-title">You have {{$notifications? $notifications->count() : 0 }} new notification</div>
                        </li>
                        @if($notifications != null)
                        @foreach ($notifications as $notification)
                        <li>
                            <div class="notif-center">
                                <a href="{{ $notification->data['action_url'] }}">
                                    <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
                                    <div class="notif-content">
                                        <span class="block">
                                            {{ $notification->data['message'] }}
                                        </span>
                                        <span class="time">{{ $notification->created_at->diffForHumans() }}</span>
                                    </div>
                                </a>

                            </div>
                        </li>
                        @endforeach
                        @else
                        <li>
                            <a class="see-all"> <strong>No Comment</strong> <i class="la la-angle-right"></i> </a>
                        </li>
                        @endif
                        <li>
                            <a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <img src="{{ asset('assets/admin/img/profile.jpg') }}" alt="user-img" width="36" class="img-circle"><span class=" text-dark">{{Auth::user()->name}}</span> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <div class="user-box  ">
                                <div class="u-img"><img src="{{ asset('assets/admin/img/profile.jpg') }}" alt="user"></div>
                                <div class="u-text ">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p class="text-muted">{{Auth::user()->email}}</p>
                                    <a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    <a href="{{route('home')}}" class="btn btn-rounded btn-danger btn-sm mt-2">View Forntend</a>
                                </div>
                            </div>
                        </li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger dropdown-item px-3" href="#" onclick="event.preventDefault();
                        this.closest('form').submit();">Log
                                Out</button>
                        </form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </div>
    </nav>
</div>