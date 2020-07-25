@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Message</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Name: </th><td>{{$message->name}}</td>
          </tr>
          <tr>
            <th>Email: </th><td>{{$message->email}}</td>
          </tr>
          <tr>
            <th>Phone Number: </th><td>{{$message->phone_number}}</td>
          </tr>
          <tr>
            <th>Message: </th><td>{{$message->message}}</td>
          </tr>
          <tr>
            <th><a href="mailto:{{$message->email}}"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></td>
            <th><form method="get" id="form-delete-{{$message->id}}" action="{{ route('message.destroy', $message->id) }}" style="display:none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
                <a href="{{ route('message.index') }}" 
                  onClick="if(confirm('Are you sure, you want to delete this?'))
                  {
                    event.preventDefault();
                    document.getElementById('form-delete-{{ $message->id }}').submit();
                  }else{
                    event.preventDefault();
                  }">
                <i class="fa fa-trash"></i> Delete</a></td>
          </tr>
        </table>
      </div>
    <!-- /.box -->
    </div>

  </section>
  <!-- /.content -->

</div>

@endsection