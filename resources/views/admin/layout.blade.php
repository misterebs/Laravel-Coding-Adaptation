<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/iCheck/flat/blue.css')}}" rel="stylesheet">
  <!-- Morris chart -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/morris/morris.css')}}" rel="stylesheet">
  <!-- jvectormap -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Date Picker -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/datepicker/datepicker3.css')}}" rel="stylesheet">
  <!-- Daterange picker -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet">
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet">

  <link href="{{asset ('vendor/bower_dl/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">

  <link href="{{asset ('assets/css/admin.css')}}" rel="stylesheet">

  <script type="text/javascript" src="{{ asset('vendor/bower_dl/AdminLTE/plugins/ckeditor/ckeditor.js') }}"></script>
  <!-- include summernote css/js-->
  <style type="text/css">
    #share-buttons img {
    width: 35px;
    padding: 7px;
    border: 0;
    box-shadow: 0;
    display: inline-block;
    }
  </style>

  @yield('styles')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/admin/post') }}" class="navbar-brand"><b>{{config('blog.title')}}</b> <i>A simple site</i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          @include('admin.partials.navbar')
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li><a href="/" target="_blank"><i class="fa fa-share"></i> View site</a></li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-user"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">
                  @if (Auth::guest())
    
  @else
    {{ Auth::user()->name }}
        
  @endif
                </span>
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{asset ('vendor/bower_dl/AdminLTE/dist/img/nathan.jpg')}}" class="img-circle" alt="User Image">

                  <p>
                    Nathan N.Q - Web Developer
                    <small>Member since Nov. 2016</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Top Navigation
          <small>Admin 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ config('blog.tag') }}">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        
        <div class="box box-default">
          
          <div class="box-body">
            @yield('content')
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <div id="share-buttons">
    
          <!-- Facebook -->
          <a href="https://www.facebook.com/seogratisan" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
          </a>
    
          <!-- Google+ -->
          <a href="https://plus.google.com/+ekobudisantosopress" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
          </a>
    
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/ekoboedhisantoso" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
          </a>
    
          <!-- Pinterest -->
          <a href="https://pinterest.com/ekoboedhisantoso" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
          </a>
    
          <!-- Twitter -->
          <a href="https://twitter.com/misterebs_" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
          </a>
    
          </div>
      </div>
      &copy; 2016 <a href="https://twitter.com/misterebs_">#misterebs</a>. All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('vendor/bower_dl/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('vendor/bower_dl/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('vendor/bower_dl/AdminLTE/dist/js/demo.js')}}"></script>

<script src="{{ asset('vendor/bower_dl/AdminLTE/plugins/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('vendor/bower_dl/AdminLTE/plugins/ckeditor/jquery.js') }}"></script>

<script>
  $(function () {
    $("#posts-table").DataTable();
    $('#posts-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "order: [[0, "desc"]]
    });
  });
</script>
@yield('scripts')
</body>
</html>
