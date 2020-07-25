@extends('admin.app')
@section('css')
<style>
  .new {
    width: 20px;
    height: 20px;
    background: #d12727;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    padding: 0 5px;
  }
  .tr-bold td {
    font-weight: bold;
    color: #000;
  }
</style>
@endsection
@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Messages</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Delete</th>
            <th>View</th>
            <th>Reply</th>
          </tr>
          </thead>
          <tbody>
           @foreach ($messages as $message)
            <tr <?=($message->is_viewed) ? '' : 'class="tr-bold"'?>>
              <td> @if($message->is_new) <span class="new">New</span> @endif {{ $loop->index + 1}}</td>
              <td>{{ $message->name }}</td>
              <td>{{ $message->email }}</td>
              <td>{{ $message->phone_number}}</td>
              <td><?=substr($message->message,0, 25)?>....</td>
              <td>
                <form method="get" id="form-delete-{{$message->id}}" action="{{ route('message.destroy', $message->id) }}" style="display:none;">
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
                <i class="fa fa-trash"></i> Delete</a>
              </td>
              <td><a href="/admin/messages/{{ $message->id }}"><i class="fas fa-eye"></i> View</a></td>
              <td><a href="mailto:{{$message->email}}"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Delete</th>
            <th>View</th>
            <th>Reply</th>
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