<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 text-right">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 " href="/">مدیریت تبلیغات</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar text-right" >
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            میزکار
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user_propagation.index')}}">
                            <span data-feather="bell"></span>
مدیریت تبلیغات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('userInfo')}}">
                            <span data-feather="user"></span>
 اطلاعات کاربری
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
