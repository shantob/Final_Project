<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Index</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css') }}" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-dark" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="#" class="nav-link h1 text-light my-2">
                Dashboard </br>
            </a>
            <a href="profile.html"><li href="" class="nav-link nav-item{{ Route::is('admin.profile') ?  'active' : ''}}">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </li></a>
            <a href="{{ route('admin.home')}}"><li href="" class="nav-link nav-item {{ Route::is('admin.home') ?  'active' : ''}}">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product List</span>
            </li></a>

            <a href="{{ route('admin.productadd')}}"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product Add</span>
            </li></a>
            <a href="{{ route('admin.category')}}"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Categpry</span>
            </li></a>
           <a href="{{ route('admin.categoryadd')}}"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category Add</span>
            </li></a> 
           <a href="notification.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Notification</span>
            </li></a> 
            <a href="invoice.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Invoice</span>
            </li></a>
            <a href="{{ route('admin.userlist')}}"><li  class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">User Detels</span>
            </li></a>
        </ul>

        <span href="" class="nav-link h4 w-100 ">
            <a href=""><i class="bx bxl-instagram-alt text-danger"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 mx-5 text-danger"></i></a>
            <a href=""><i class="bx bxl-facebook text-danger mb-4"></i></a>
            <a href="login.html"><button type="submit" class="btn btn-secondary w-100 my-2">Log Out</button></a>
        </span>
       
    </div>
    <nav class="navbar top-navbar navbar-light bg-dark m-0 px-5 sticky-top" style="height:80px ">
        <div class="input-group">
            <a href="index.html" class="nav-link h1 text-light ">
                Dashboard </br>
            </a>
            <input style="margin-left: 5rem; margin-right: 1rem;" type="search" class="form-control mt-2" placeholder="Search Product">
            <div class="input-group-">
              <button class="btn btn-secondary mt-2" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
    </nav>

    <!-- Main Wrapper -->
	@yield('content')
    </div>
    </div>
    </div>
    <!--Main Navigation-->

    <!--Main layout-->


    </div>
    </div>

    <!-- bootstrap js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>

