@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Details</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{route('course.update', $course->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="box-body">
        <div>
          <div class="form-group">
            <label for="course-title">Name</label>
            <input type="string" name="name" class="form-control" id="course-title" placeholder="Enter Course Name" value="{{ $course->name }}">
          </div>
          @if ($course->thumbnail)
            <div><img src="/storage/images/course/{{ $course->thumbnail }}" width="100"></div> 
          @endif
          <div class="form-group">
            <label for="course-thumbnail">Change Thumbnail Image (376x348)</label>
            <div>
              <input type="file" name="thumbnail" class="image-upload" id="input-file">
            </div>
          </div>
          <div class="form-group">
            <label for="course-description">Description</label>
            <div id="editor">
              <textarea name = "course_description" class="form-control" id="myEditor" placeholder="Enter Description">{{ $course->description }}</textarea>
            </div>  
          </div>  
        </div>
        <!-- /.content -->
        <div class="box-footer text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a class="btn btn-warning" href="/admin/course">Show course List</a>
        </div>  
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