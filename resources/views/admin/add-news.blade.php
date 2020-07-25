@extends('admin.app')
@section('css')
<style>
.hide {
  display: none;
}
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Announcement</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="news-title">Title</label>
          <input type="string" name="title" class="form-control" id="news-title" placeholder="Enter Title" value="{{ old('title') }}">
        </div> 
        <div class="form-group">
          <label for="myEditor">News Content</label>
          <div id="editor">
            <textarea name = "news_content" class="form-control" id="myEditor" placeholder="Enter Content">{{ old('news_content') }}</textarea>
          </div>
        </div> 
        <div class="form-group">
          <label for="news-pdf">Upload Pdf (If any)</label>
          <input type="file" name="news_pdf" class="pdf-upload" id="input-file" accept="application/pdf">
        </div> 
        <div class="form-group">
            <input type="checkbox" id="flash-news" name="is_flash_news" value="1"> <label for="flash-news">Flash News</label>
        </div> 
        <div class="form-group end-time hide">
            <label for="flash-news-end-time">Show this as flash news to</label>
            <input type="date" id="flash-news-end-time" name="flash_news_end_time">
        </div>

        <!-- /.content -->
        <div class="box-footer text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a class="btn btn-warning" href="/admin/news">Show Announcements </a>
        </div>  
      </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'news_content' );
    $('#flash-news').change(function(){
      if (this.checked) {
        $('.end-time').removeClass('hide');
      } else {
        $('.end-time').addClass('hide');
      }
    });
</script>
@endsection