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
        <div class="col-md-4">
            <div class="full blog_img_popular">
               <img class="img-responsive" src="/storage/images/p1.png" alt="#" /> 
               <h5>Freshers Day 2020</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p2.png" alt="#" />
                <h5>Send Off Meeting Of Sri. xxxxxxxxx</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p3.png" alt="#" />
                <h5>Freshers Day 2019</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
               <img class="img-responsive" src="/storage/images/p1.png" alt="#" /> 
               <h5>Freshers Day 2018</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p2.png" alt="#" />
                <h5>Freshers Day 2017</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p3.png" alt="#" />
                <h5>Freshers Day 2016</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
               <img class="img-responsive" src="/storage/images/p1.png" alt="#" /> 
               <h5>Freshers Day 2018</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p2.png" alt="#" />
                <h5>EC</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p3.png" alt="#" />
                <h5>Freshers Day 2000</h5>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection