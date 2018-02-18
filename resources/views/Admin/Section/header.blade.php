<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 text-right">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">مدیریت تبلیغات</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar text-right" >
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/panel">
                            <span data-feather="home"></span>
                            میزکار
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/categories">
                            <span data-feather="layers"></span>
                            مدیریت دسته بندی ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/propagation">
                            <span data-feather="bell"></span>
                            مدیریت تبلیغات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="info"></span>
                            مدیریت اطلاعات سایت
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('userManagement')}}">
                            <span data-feather="users"></span>
                            مدیریت کاربران
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adminInfo')}}">
                            <span data-feather="user"></span>
                             اطلاعات کاربری
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('notAcceptedPropagation')}}">
                            <span data-feather="x-square">12</span>
تبلیغات تایید نشده
                            <span class="badge badge-dark">
                                <?php
                                $count=\App\Propagation::whereActive('0')->count();
                                echo $count;
                                ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('acceptedPropagation')}}">
                            <span data-feather="check-square"></span>
تبلیغات تایید شده
                            <span class="badge badge-dark">
                                <?php
                                    $count=\App\Propagation::whereActive('1')->count();
                                    echo $count;
                                ?>
                            </span>
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
