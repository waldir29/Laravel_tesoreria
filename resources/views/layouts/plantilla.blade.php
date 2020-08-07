<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/cropped-favicon.ico.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>CRUD</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/adm/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plugins/adm/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/adm/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!--ADD-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!--script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.nav')
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4 aside-dp">
    <a href="/" class="brand-link">
      <img src="{{asset('img/cropped-favicon.ico.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CRUD</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>Movie<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-id-badge nav-icon"></i><p>New movie</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('registros.create') }}" class="nav-link">
                    <i class="far fa-list-alt nav-icon"></i><p>Lista de movies</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-header">Series</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>New serie<span class="badge badge-info right">2</span></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Facturas<span class="badge badge-info right">2</span></p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    @yield('content')
  </div>
  <!--
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="/">Ventas.com</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>-->
</div>

<!-- Scripts -->
<script src="{{ asset('plugins/adm/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('plugins/adm/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/adm/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('plugins/adm/dist/js/adminlte.js')}}"></script>

</body>
</html>
