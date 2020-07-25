@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
.img-fill img {
    display: block;
    margin: auto;
    width: 100%;
}
.img-fill {
  position: relative;
  background: #ccc;
  padding: 10px;
  margin-bottom: 1em;
  box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}
.photo-count {
  background: rgba(175,44,44,.6);
  padding: 4px 7px;
  color: #fff;
  position: absolute;
  font-size: .875rem;
  border-radius: 5px;
  z-index: 3;
  top: 10px;
  left: 10px;
}
</style>
@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>Freshers Day 2020</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->


<!-- section -->
<div class="section layout_padding ">
<div class="container">
  <?php $count = 1; $totalCount = count($galleryImages); ?>
  @foreach($galleryImages as $image)
    <div class="img-fill">
      <span class="photo-count">{{$count}} / {{$totalCount}}</span>
      <img src="/storage/images/gallery/uploads/{{$image->image_pathname}}" alt="Kitten {{$image->id}}"></div>
      <?php $count++?>
  @endforeach
</div>            
</div>
<!-- end section -->
@endsection

