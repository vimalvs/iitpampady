@extends('admin.app')
@section('css')
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Course</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="course-title">Title</label>
          <input type="string" name="name" class="form-control" id="course-title" placeholder="Enter Course" value="{{ old('name') }}">
        </div> 
        <div class="form-group">
          <label for="course-description">Description</label>
          <div id="editor">
            <textarea name = "course_description" class="form-control" id="myEditor" placeholder="Enter Description">{{ old('course_description') }}</textarea>
          </div>
        </div> 
        <div class="form-group">
          <label for="course-thumbnail">Thumbnail Image (376x348)</label>
          <div class="form-group">
            <input type="file" name="thumbnail" class="image-upload" id="input-file">
          </div>
        </div> 
      </div>
      <!-- /.content -->
      <div class="box-footer text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-warning" href="/admin/course">Show Courses</a>
      </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'course_description' );
</script>
@endsection