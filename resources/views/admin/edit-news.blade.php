@extends('admin.app')
@section('css')
<style>
  .file-wrapper {
    padding: 10px;
    box-shadow: 5px 5px 5px #666;
    -moz-box-shadow: 5px 5px 5px #666;
    -webkit-box-shadow: 5px 5px 5px #666;
    margin: 15px 0;
    background: #ccc;
    width:120px;
    float: right;
   
  }
  .file-wrapper a {
    color: #000;
    font-weight: bold;
  }
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
      <h3 class="box-title">News Details</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{route('news.update', $news->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="box-body">
        <div>
          <div class="form-group">
            <label for="news-title">Title</label>
            <input type="string" name="title" class="form-control" id="news-title" placeholder="Enter news title" value="{{ $news->title }}">
          </div>
          <div class="form-group">
            <label for="myEditor">News Content</label>
            <div id="editor">
              <textarea name = "news_content" class="form-control" id="myEditor" placeholder="Enter Content">{{ $news->content }}</textarea>
            </div>
          </div> 
          @if ($news->pdf_url)
            <div class="file-wrapper"><a target="_blank" href="/storage/pdf/news/{{$news->pdf_url}}">View File >></a></div> 
          @endif
          <div class="form-group">
            <label for="news-pdf">Change Pdf File</label>
            <div>
              <input type="file" name="news_pdf" class="pdf-upload" id="input-file" accept="application/pdf">
            </div>
          </div>
          <div class="form-group">
            <input type="checkbox" id="flash-news" name="is_flash_news" value="1" <?=($news->is_flash_news) ? "checked" : ''?>> <label for="flash-news">Flash News</label>
          </div> 
          <div class="form-group end-time <?=($news->is_flash_news) ? '' : 'hide'?>">
              <label for="flash-news-end-time">Show this as flash news to</label>
              <?php
                $date = new DateTime($news->flash_news_end_time);
              ?>
              <input type="date" id="flash-news-end-time" name="flash_news_end_time"  value="{{ $date->format('Y-m-d')}}">
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