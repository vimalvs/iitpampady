@extends('admin.app')
@section('css')
<style>
.hide {
  display: none;
}
.thumbnail-preview {
  width: 200px;
  margin-bottom: 2em;
}
.thumbnail-preview img {
  width: 100%;
}
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Gallery</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="gallery-title">Title</label>
          <input type="string" name="title" class="form-control" id="gallery-title" placeholder="Enter Title" value="{{ old('title') }}">
        </div> 
        <div class="thumbnail-preview hide"></div>
        <div class="form-group">
          <label for="gallery-thumbnail">Thumbnail (375x250)</label>
          <input type="file" name="thumbnail" class="thumbnail-image" id="gallery-thumbnail">
        </div> 

        <!-- /.content -->
        <div class="box-footer text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a class="btn btn-warning" href="/admin/gallery">Show Gallery List</a>
        </div>  
      </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script>
  $('.thumbnail-image').change(function(e){
    var ele = $('.thumbnail-preview').removeClass('hide');
    var code = `<img src="`+URL.createObjectURL(e.target.files[0])+`">`;
    ele.html(code);
  });

</script>

@endsection