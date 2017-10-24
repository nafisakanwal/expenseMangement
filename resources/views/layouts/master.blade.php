<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">
    <title></title>

    <!-- Icons -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">&#9776;</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">&#9776;</button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none">admin</span>
            </a>

        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">&#9776;</button>

</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
                </li>


                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="{{url('expenes')}}">
                        <i class="icon-puzzle"></i> Expenses</a>

                </li>

                @if (Auth::user()->is_admin) ==1)
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="{{url('register')}}"><i class="icon-star"></i> Users</a>

                </li>
                @endif

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="{{url('reports')}}"><i class="icon-star"></i> Reports</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('pages')}}"><i class="icon-pie-chart"></i> Charts</a>

                </li>
                <li class="divider"></li>
                <li class="nav-title">
                    Extras
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="{{url('pages')}}"><i class="icon-star"></i> Pages</a>

                </li>
                <li class="nav-item mt-auto">
                    <a class="nav-link nav-link-success" href="http://coreui.io" target="_top"><i class="icon-cloud-download"></i>
                        Download App</a>
                </li>

            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">
            @yield('body');
            <div id="ui-view"></div>
        </div>
        <!-- /.conainer-fluid -->
    </main>

    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                    <small><b>Today</b></small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout callout-warning m-0 py-3">
                    <div class="avatar float-right">
                        <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Meeting with
                        <strong>Lucas</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-info m-0 py-3">
                    <div class="avatar float-right">
                        <img src="{{ asset('img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Skype with
                        <strong>Megan</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                    <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                    <small><b>Tomorrow</b></small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout callout-danger m-0 py-3">
                    <div>New UI Project -
                        <strong>deadline</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/2.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/3.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-success m-0 py-3">
                    <div>
                        <strong>#10 Startups.Garden</strong> Meetup</div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-primary m-0 py-3">
                    <div>
                        <strong>Team meeting</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/2.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/3.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/5.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="{{ asset('img/avatars/8.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="mx-3 my-0">
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="{{ asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>

                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small><b>Option 1</b></small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input" checked>
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 2</b></small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 3</b></small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 4</b></small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input" checked>
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <hr>
                <h6>System Utilization</h6>

                <div class="text-uppercase mb-1 mt-4">
                    <small><b>CPU Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>Memory Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>SSD 1 Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>SSD 2 Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>

</div>

<footer class="app-footer">
    <span><a href="http://www.funfeesa.com">NK</a> &copy; 2017 funfeesa.</span>
    <span class="ml-auto">Powered by Funfeesa <a target="_blank" href="http://www.funfeesa.com">NK</a></span>
</footer>

<!-- Bootstrap and necessary plugins -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/pace-progress/pace.min.js"></script>



<script src="js/app.js"></script>

</body>
</html>



{{--<html>--}}

{{--<head>--}}
    {{--<meta charset="UTF-8">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<title>Expense Management</title>--}}
    {{--<meta name="Nova theme" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--}}
          {{--integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

    {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons"--}}
          {{--rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>--}}
    {{--<link rel="stylesheet" href="{{ asset('/css/responsive.css') }}"/>--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>--}}

{{--</head>--}}

{{--<body>--}}
{{--<!-- Navigation--}}
    {{--================================================== -->--}}
{{--<div class="hero-background">--}}
    {{--<div>--}}
        {{--<img class="strips" src="assets/images/strips.png">--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="header-container header">--}}
            {{--<a style="color: #fff" class="navbar-brand logo" href="#">--}}
                {{--<img class="avatar" src="{{asset('images/nafisa.jpg')}}"/>Nafisa</a>--}}
            {{--<a href="#email-form">--}}
                {{--<button class="header-btn">Manage your Budget</button>--}}
            {{--</a>--}}
            {{--<div class="header-right">--}}
                {{--<a class="navbar-item" href="#features">Account</a>--}}
                {{--<a class="navbar-item" href="#pricing">Expenses</a>--}}
                {{--<a class="navbar-item" href="#team">Reports</a>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--<!--navigation-->--}}

{{--@yield('body')--}}


    {{--</div>--}}
