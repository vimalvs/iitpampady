@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Page</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{route('page.edit', $page->id)}}" method="post">
      {{csrf_field()}}
      <div class="box-body">
        <div>
          <div class="form-group">
            <div id="editor">
              <textarea name = "page_content" class="form-control" id="myEditor" placeholder="Enter Description">{{ $page->content }}</textarea>
            </div>  
          </div>  
        </div>
        <!-- /.content -->
        <div class="box-footer text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>  
    </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'page_content' );
</script>
@endsection