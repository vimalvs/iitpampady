@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Manage Banner Images</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Section</th>
            <th>Manage</th>
            <th>View</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($arSection as $section => $data)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $section }}</td>
                <td><a href="/admin/banner/{{$data[0]}}">Edit</a></td>
                <td><a target="_blank" href="{{$data[1]}}">View</a></td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Section</th>
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