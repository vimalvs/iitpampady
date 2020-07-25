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
  .form-wrapper, .gallery-image-wrapper {
    border:3px solid #ccc;
    padding: 10px;
    text-align: center;
    margin-bottom: 2em;
    overflow: hidden;
  }
  .gallery-image-wrapper {
    max-width: 300px;
    height: 100%;
  }
  .upload-image-wrapper > div {
    width: 150px;
    height: 150px;
    padding: 10px;
    float: left;
    position: relative;
  }
  .upload-image-wrapper > div > img {
    width: 100%;
  }
  .image-upload-form {
    margin-top: 20px;
  }
  .upload-image-preview img {
    width:150px;
  }
  .delete-image {
    position: absolute;
    top: 34px;
    left: 34px;
  }
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Gallery :: {{ $gallery->title }}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form stafrt -->
    <div class="row">
      <div class="form-wrapper col-12 col-md-4">
        @include('admin.message')
        <form role="form" action="{{route('gallery.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PATCH')}}
          <div class="box-body">
            <div>
              <div class="form-group">
                <label for="gallery-title">Title</label>
                <input type="string" name="title" class="form-control" id="gallery-title" placeholder="Enter title" value="{{ $gallery->title }}">
              </div>

              <div class="thumbnail-preview"><img src="/storage/images/gallery/thumbnail/{{$gallery->thumbnail}}"></div>

              <div class="form-group">
                <label for="gallery-thumbnail">Change Thumbnail (375x250)</label>
                <div>
                  <input type="file" name="thumbnail" class="thumbnail-image" id="gallery-thumbnail">
                </div>
              </div>
            </div>
            <!-- /.content -->
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-warning" href="/admin/gallery">Show List</a>
            </div>  
        </div>
        </form>
      </div>
      <div class="gallery-image-wrapper col-12 col-md-4">
        <div id="upload-image-error-message"></div>
        <h3>Photos</h3>
        <div class="upload-image-preview hide"></div>
        <form class="image-upload-form" role="form" action="{{ route('add-gallery-image') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="box-body row">
            <div class="col-12">
              <div class="form-group">
                <input type="file" name="gallery_image" class="gallery-image-upload" id="gallery-input-file">
              </div>

              <div class="box-footer text-center col-12 col-md-6">
                <input type = "hidden" name="gallery_id" value="{{$gallery->id}}">
                <button type="submit" class="btn btn-primary btn-add">Add</button>
              </div>
            </div>
          </div>               
        </form> 
      </div>
      <div class="upload-image-wrapper col-12 col-md-4">
        <p id="status-message"></p>
        @if($galleryImages)
          @foreach($galleryImages as $image)
            <div>
              <img src="/storage/images/gallery/uploads/{{$image->image_pathname}}">
              <button data-id="{{$image->id}}" class="btn btn-danger delete-image">Remove</button>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $('.thumbnail-image').change(function(e){
    var ele = $('.thumbnail-preview').removeClass('hide');
    var code = `<img src="`+URL.createObjectURL(e.target.files[0])+`">`;
    ele.html(code);
  });

  $('.gallery-image-upload').change(function(e){
    $('#upload-image-error-message').removeClass('alert-danger').removeClass('alert-success').html('');
    var ele = $('.upload-image-preview').removeClass('hide');
    var code = `<img src="`+URL.createObjectURL(e.target.files[0])+`">`;
    ele.html(code);
  });


  $('.image-upload-form').on('submit', function(event) {
    event.preventDefault();
    var $this = this;
    $.ajax({
      url:"{{ route('add-gallery-image') }}",
      method:"POST",
      data:new FormData(this),
      dataType:'JSON',
      contentType:false,
      cache : false,
      processData: false,
      success:function(data)
      {
        var ele = $('#upload-image-error-message');
        ele.html(data.message);
        ele.addClass(data.class_name);
        
        if(data.class_name == "alert-success") {
          var uploadEle = $('.upload-image-wrapper');
          uploadEle.append('<div>'+data.uploaded_image+'<button data-id="'+data.id+'" class="btn btn-danger delete-image">Remove</button></div>');
        }
        
        $('#gallery-input-file').val(null);
        $('.upload-image-preview').addClass('hide');
      }
    });
  });
  $(document).on("click", ".delete-image", function() {
    var $this = $(this);
    if(confirm("Are you sure you want to delete this image?")){
      var id = $this.data('id');
      $.ajax({
        url:"/admin/gallery-image/destroy/"+id,
        method:"GET",
        dataType:'JSON',
        contentType:false,
        cache : false,
        processData: false,
        success:function(data)
        {
          var ele = $('#status-message');
          ele.html(data.message);
          ele.addClass(data.class_name);
          $this.closest('div').remove()
        }
      })

    } else {
        return false;
    }
  });
</script>
@endsection