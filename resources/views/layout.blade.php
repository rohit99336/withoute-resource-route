<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Real Admin</title>
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Admin Panel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                {{-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> --}}
            </div>
        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    
                <a class="dropdown-item" href="#!">{{Auth::user()->name}}</a>
                    {{-- <a class="dropdown-item" href="#!">Settings</a>
                    <a class="dropdown-item" href="#!">Activity Log</a>
                    <div class="dropdown-divider"></div> --}}
                    {{-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                </div>
            </div>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" class="{{ request()->is('home') ? 'active' : ''}}"
                            href="{{ url('home') }}">
                            <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        
                        <!--Properties related -->
                        <div class="sb-sidenav-menu-heading">Property Pages</div>
                        {{-- <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> --}}

                        <a class="nav-link" class="{{ request()->is('real-admin') ? 'active' : ''}}"
                            href="{{ url('real-admin') }}">
                            <div class="sb-nav-link-icon"><i class="far fa-user"></i></div>
                            Users
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; my Website 2021</div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/demo/datatables-demo.js')}}"></script>
</body>

</html>
