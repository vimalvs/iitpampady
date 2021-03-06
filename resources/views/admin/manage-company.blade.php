@extends('admin.app')
@section('css')
<style>
.image-upload-wrapper {
  padding: 10px 0px;
}
.image-data-wrapper {
  text-align: center;
}
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

.uploaded-images >div {
  border:2px solid #ccc;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.77);
}

.uploaded-images > div {
  height: 300px;
  overflow: hidden;
}
.uploaded-images img {
  width:100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.delete-company {
  position: absolute;
  top: 50%;
  left: 40%;
}

.no-pad {
  padding: 0 !important;
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

</style>

@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Manage Recruiters</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    @include('admin.message')
    <div class="card mb-4 py-3 border-left-primary">
      <div class="card-body">
        
        <span>Recruiters</span>
        <hr>

        <div class="row">
          <div class="col-12">
            <div id="message"></div>
            <form class="upload-form" role="form" action="{{ route('manage-company') }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-head">
                Add Company
              </div>
              <div class="image-preview hide"></div>

              <div class="box-body row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="file" name="logo" class="image-upload" id="input-file">
                  </div>
                  <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <div>
                      <input type="string" name="name" id="company-name">
                    </div>
                  </div>

                  <div class="box-footer text-center col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-add">Add</button>
                  </div>
                </div>
              </div>               
            </form> 
          </div>
          <div class="col-12">
            <div class="image-upload-wrapper">
              <div class="uploaded-images row">
                @if($arCompany)
                  @foreach($arCompany as $company)
                    <div class="image col-4">
                      <img src="/storage/images/company/{{$company->logo}}">
                      <button data-id="{{$company->id}}" class="btn btn-danger delete-company">Remove</button>
                    </div>
                  @endforeach
                @endif
              </div>
            </div>
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
      url:"{{ route('manage-company') }}",
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
        
        if(data.class_name == "alert-success") {
          var uploadEle = $('.uploaded-images');
          uploadEle.append('<div class="image col-4">'+data.logo+'<button data-id="'+data.id+'" class="btn btn-danger delete-company">Remove</button></div>');
        }
        
        $('#input-file').val(null);
        $('.image-preview').addClass('hide');
      }
    });
  });

  $(document).on("click", ".delete-company", function() {
    var $this = $(this);
    if(confirm("Are you sure you want to delete this?")){
      var id = $this.data('id');
      $.ajax({
        url:"/admin/company/destroy/"+id,
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
          $this.closest('.image').remove()
        }
      })

    } else {
        return false;
    }
  });
});
</script>
@endsection