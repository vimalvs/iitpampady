@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
.blog_img_popular h5{
    width: 86%;
    background: #fff;
    margin: 0 7%;
    padding: 20px 0;
    color: #095a83;
    text-align: center;
    font-size: 20px;
    min-height: 70px;
    box-shadow: 0 0 25px 0 rgba(0,0,0,.2);

}
</style>
@endsection

@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>Gallery</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->

<!-- section -->
<div class="section layout_padding">
<div class="container">
  <div class="row">
    @foreach($arGallery as $gallery)
     <div class="col-md-4">
        <a href="/gallery/{{$gallery->id}}">
          <div class="full blog_img_popular">
            <img class="img-responsive" src="/storage/images/gallery/thumbnail/{{$gallery->thumbnail}}" alt="{{$gallery->title}}" /> 
            <h5>{{$gallery->title}}</h5>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection