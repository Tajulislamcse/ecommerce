<!DOCTYPE html>


<html>
   <head>
     @include('Admin.layouts.link')
   </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
   @include('Admin.layouts.header')
  
  <!-- Left side column. contains the logo and sidebar -->
   @include('Admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @include('Admin.layouts.footer')

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components')}}/jquery/dist/jquery.min.js"></script>

<script src="{{asset('bower_components')}}/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{asset('js')}}/adminlte.min.js"></script>
    

</body>
</html>