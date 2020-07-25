@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Dashboard</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Page</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><a href="/admin/banner" target="_blank">Manage Page Banner Images</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td><a href="/admin/course" target="_blank">List Courses</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td><a href="/admin/news" target="_blank">News</a></td>
            </tr> 
            <tr>
              <td>3</td>
              <td><a href="/admin/gallery" target="_blank">Gallery</a></td>
            </tr> 
            <tr>
              <td>4</td>
              <td><a href="/admin/company" target="_blank">Recruiting Companies</a></td>
            </tr> 
            <tr>
              <td>5</td>
              <td><a href="/admin/page" target="_blank">Manage Page Content</a></td>
            </tr>
            <tr>
              <td>6</td>
              <td><a href="/admin/committee" target="_blank">Committee Members</a></td>
            </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Page</th>
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