<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.layout.head')
@section('css')
@show
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   @include('admin.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @include('admin.layout.header')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @section('content')
          @show
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('admin.layout.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

</body>
</html>
@section('script')
@show