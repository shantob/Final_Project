<div class="sidebar bg-light">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/admin/img/profile.jpg') }}">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span class=" text-dark">
                        {{ Auth::user()->name }}
                        <span class="user-level  text-dark">{{ Auth::user()->role_id == 1 ? 'Admin' : 'Manager' }}</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="">
                                <span class="link-collapse  text-dark">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <span class="link-collapse  text-dark">View Forntend</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse text-dark">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse text-dark">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav ">
            <li class="nav-item {{ Route::is('admin.home') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}">
                    <i class="la la-dashboard"></i>
                    <p class=" text-dark">Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ Route::is('carousels.index') ? 'active' : '' }}">
                <a href="{{ route('carousels.index') }}">
                    <i class="la la-dashboard"></i>
                    <p class=" text-dark">Carousels</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('product.index') ? 'active' : '' }}">
                <a href="{{ route('product.index') }}">
                    <i class="la la-table"></i>
                    <p class=" text-dark">All Product</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('category.index') ? 'active' : '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="la la-table"></i>
                    <p class=" text-dark">Category</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('brand.index') ? 'active' : '' }} {{ Route::is('color.index') ? 'active' : '' }}  {{ Route::is('sizes.index') ? 'active' : '' }}">
                <a class="" data-toggle="collapse" href="#collapseExamples" aria-expanded="true">
                    <i class="bi bi-chevron-double-down"></i>
                    <p class=" text-dark">Master Data</p>
                </a>
            </li>
            <div class="clearfix"></div>
            <div class="collapse in" id="collapseExamples" aria-expanded="true">
                <ul class="nav">
                    <li class="nav-item {{ Route::is('color.index') ? 'active' : '' }}">
                        <a href="{{ route('color.index') }}">
                            <i class="bi bi-eyedropper"></i>
                            <p class=" text-dark">Color</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('brand.index') ? 'active' : '' }}">
                        <a href="{{ route('brand.index') }}">
                            <i class="bi bi-dropbox"></i>
                            <p class=" text-dark">Brand</p>
                        </a>
                    </li>

                    <li class="nav-item {{ Route::is('sizes.index') ? 'active' : '' }}">
                        <a href="{{ route('sizes.index') }}">
                        <i class="bi bi-bounding-box"></i>
                            <p class=" text-dark">Sizes</p>
                        </a>
                    </li>
                </ul>
            </div>
            <li class="nav-item {{ Route::is('admin.commentlist') ? 'active' : '' }}">
                <a href="{{ route('admin.commentlist') }}">
                    <i class="bi bi-inbox"></i>
                    <p class=" text-dark">Comment</p>
                    <span class="badge badge-success">#</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="#">
                    <i class="bi bi-bell-fill"></i>
                    <p class=" text-dark">Notification</p>
                    @php
                    $notifications = Auth::user()->unreadNotifications;
                    @endphp
                    <span class="badge badge-success">{{ $notifications ? $notifications->count() : 0 }}</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <i class="bi bi-people-fill"></i>
                    <p class=" text-dark">User List</p>
                    <span class="badge badge-warning"></span>
                </a>
            </li>

        </ul>
    </div>
</div>