@extends('admin.app')
@section('css')
<style>

.image-preview {
  width: 150px;
  margin-bottom: 20px;
}
.hide {
  display: none;
}
.image-preview > img {
  width: 100%;
}
#message{
  padding: 20px;
  margin-bottom: 2rem;
  text-align: center;
}

.upload-form {
  max-width: 300px;
  margin: auto;
  padding: 20px;
  border: 5px solid #808080ad;
  text-align: center;
  overflow: hidden;
}
.form-head {
  text-align: center;
  text-transform: uppercase;
  height: 50px;
  background-color: #ccc;
  padding: 15px;
  font-size: 15px;
  margin-bottom: 1rem;
  color: #000;
}
.uploaded-images > .col-2 {
  padding: 10px;
  border: 1px solid #ccc;
}
.image-wrapper img {
  width:100%;
}
.member-details {
  color: #000;
  text-align: center;
}
.margin-top {
  margin-top:2rem;
}
.tc {
  text-align: center;
}
</style>

@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Board Members</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    @include('admin.message')
    <div class="card mb-4 py-3 border-left-primary">
      <div class="card-body">
  
        <div class="row">
          <div class="col-12">
            <div id="message"></div>
            <form class="upload-form" role="form" action="{{ route('manage-board-member') }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-head">
                Add Member
              </div>
              <div class="image-preview hide"></div>

              <div class="box-body">
                <div class="form-group">
                  <input type="file" name="member_image" class="image-upload" id="input-file">
                </div>
                <div class="form-group">
                  <label for="member-name">Name</label>
                  <input name="name" type="text" class="form-control" id="member-name">
                </div>
                <div class="form-group">
                  <label for="member-position">Select Position</label>
                  <select class="form-control" id="member-position" name="position">
                    @foreach ($arPosition as $value => $positionName)
                    <option value="{{$value}}">{{$positionName}}</option>
                    @endforeach
                  </select>
                </div> 
                <div class="box-footer text-center col-12 col-md-6">
                  <button type="submit" class="btn btn-primary btn-add">Add</button>
                </div>
              </div>              
            </form> 
          </div>
          <div class="col-12 row margin-top uploaded-images">
            @if($arMembers)
              @foreach($arMembers as $member)
              <div class="col-2 tc">
                <div class="image-wrapper">
                  <img src="/storage/images/committee/{{$member['image']}}">
                </div>
                <div class="member-details text-center">
                  <span>{{$member['name']}}</span><br>
                  <span>{{$arPosition[$member['position']]}}</span>
                </div>
                <button data-id="{{$member['id']}}" class="btn btn-danger delete-image">Remove</button>
              </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {

  $('.image-upload').change(function(e){
    $('#message').removeClass('alert-danger').removeClass('alert-success').html('');
    var ele = $('.image-preview').removeClass('hide');
    var code = `<img src="`+URL.createObjectURL(e.target.files[0])+`">`;
    ele.html(code);
  });


  $('.upload-form').on('submit', function(event) {
    event.preventDefault();
    var $this = this;
    $.ajax({
      url:"{{ route('manage-board-member') }}",
      method:"POST",
      data:new FormData(this),
      dataType:'JSON',
      contentType:false,
      cache : false,
      processData: false,
      success:function(data)
      {
        var ele = $('#message');
        ele.html(data.message);
        ele.addClass(data.class_name);
        
        if(data.status == true) {
          var uploadEle = $('.uploaded-images');
          uploadEle.append('<div class="col-2 tc"><div class="image-wrapper">'+data.uploaded_image+'</div><div class="member-details text-center"><span>'+data.name+'</span><br><span>'+data.position+'</span></div><button data-id="'+data.id+'" class="btn btn-danger delete-image">Remove</button></div>');
        }
        
        $('#input-file').val(null);
        $('#member-name').val(null);

        $('.image-preview').addClass('hide');
      }
    });
  });

  $(document).on("click", ".delete-image", function() {
    var $this = $(this);
    if(confirm("Are you sure you want to delete this image?")){
      var id = $this.data('id');
      $.ajax({
        url:"/admin/committee/destroy/"+id,
        method:"GET",
        dataType:'JSON',
        contentType:false,
        cache : false,
        processData: false,
        success:function(data)
        {
          var ele = $('#message');
          ele.html(data.message);
          ele.addClass(data.class_name);
          $this.closest('.col-2').remove()
        }
      })

    } else {
        return false;
    }
  });
});
</script>
@endsection