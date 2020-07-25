@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Courses</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
          </tr>
          </thead>
          <tbody>
           @foreach ($courses as $course)
            <tr>
              <td>{{ $loop->index + 1}}</td>
              <td>{{ $course->name }}</td>
              <td><a href="{{ route('course.edit', $course->id)}}"><i class="far fa-edit"></i> Edit</a></td>
              <td>
                <form method="post" id="form-delete-{{$course->id}}" action="{{ route('course.destroy', $course->id) }}" style="display:none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
                <a href="{{ route('course.index') }}" 
                  onClick="if(confirm('Are you sure, you want to delete this?'))
                  {
                    event.preventDefault();
                    document.getElementById('form-delete-{{ $course->id }}').submit();
                  }else{
                    event.preventDefault();
                  }">
                  <i class="fa fa-trash"></i> Delete</a>
              </td>
              <td><a href="/courses/{{ $course->pathname }}"><i class="fas fa-eye"></i> View</a></td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
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