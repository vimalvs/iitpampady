@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">News and Announcements</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
          </tr>
          </thead>
          <tbody>
           @foreach ($arNews as $news)
            <tr>
              <td>{{ $loop->index + 1}}</td>
              <td>{{ $news->title }}</td>
              <td><a href="{{ route('news.edit', $news->id)}}"><i class="far fa-edit"></i> Edit</a></td>
              <td>
                <form method="post" id="form-delete-{{$news->id}}" action="{{ route('news.destroy', $news->id) }}" style="display:none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
                <a href="{{ route('news.index') }}" 
                  onClick="if(confirm('Are you sure, you want to delete this?'))
                  {
                    event.preventDefault();
                    document.getElementById('form-delete-{{ $news->id }}').submit();
                  }else{
                    event.preventDefault();
                  }">
                  <i class="fa fa-trash"></i> Delete</a>
              </td>
              <td>
                @if($news->content) 
                  <a href="/news/a{{ $news->id }}"> <i class="fas fa-eye"></i> View</a>
                @elseif ($news->pdf_url)
                  <a href="/public/pdf/news/{{ $news->pdf_url }}"> <i class="fas fa-eye"></i> View</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Title</th>
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