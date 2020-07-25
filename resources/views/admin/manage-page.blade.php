@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Pages</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Edit</th>
            <th>View</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>About Us</td>
              <td><a href="{{ route('page.edit', 1)}}"><i class="far fa-edit"></i> Edit</a></td>
              <td><a href="/about-us"><i class="fas fa-eye"></i> View</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Placement</td>
              <td><a href="{{ route('page.edit', 2)}}"><i class="far fa-edit"></i> Edit</a></td>
              <td><a href="/placement"><i class="fas fa-eye"></i> View</a></td>
            </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Edit</th>
            <th>View</th>
          </tr>
          </tfoot>
        </table>
      </div>
    <!-- /.box -->
    </div>

  </section>
  <!-- /.content -->

</div>

@endsection