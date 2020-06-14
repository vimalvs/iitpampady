@extends('view')
@section('main-body-id', 'home')
@section('style')
<style>
.container
{
    padding:0.01em 16px;
}
.ul li:hover{
    background-color:#ccc;
}
.ul {
    list-style-type:none;
    padding:0;margin:0;
}
.ul li{
    padding:8px 16px;
    border-bottom:1px solid #ddd;
}
.ul li:last-child {
    border-bottom:none;
}
.card-4{
    box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);
}
.display-container:hover { 
    display:block;
}
.w3-display-container{
    position:relative;
}

</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="pogoSlider" id="js-main-slider">
            <div class="pogoSlider-slide" style="background-image:url(storage/images/banner_img.png);"></div>
            <div class="pogoSlider-slide" style="background-image:url(storage/images/banner_img.png);"></div>
            <div class="pogoSlider-slide" style="background-image:url(storage/images/banner_img.png);"></div>
            <div class="pogoSlider-slide" style="background-image:url(storage/images/banner_img.png);"></div>
        </div>
        <!-- .pogoSlider -->
    </div>
</div>
<!-- End Banner -->
<!-- section -->
<div class="section">
<div class="container">
    <div class="row">
        <div class="col-md-6 layout_padding_2">
            <div class="full">
                <div class="heading_main text_align_left">
                   <h2 class="layout_padding_0"><span>Welcome To</span> Mathews Mar Ivanios Private Industrial Training Institute</h2>
                </div>
                <div class="full">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="full">
                   <a class="hvr-radial-out button-theme" href="#">About more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 layout_padding_2">
            <div class="full">
                <img src="storage/images/img2.png" alt="#" />
            </div>
        </div>
    </div>
</div>
</div>
<!-- end section -->
<!-- section -->
<div class="section layout_padding">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div class="heading_main text_align_center">
                   <h2>Courses</h2>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
               <img class="img-responsive" src="storage/images/p1.png" alt="#" /> 
               <h4>Mechanical Engineering</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="storage/images/p2.png" alt="#" />
                <h4>EC</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="storage/images/p3.png" alt="#" />
                <h4>Civil Engineering</h4>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section layout_padding padding_bottom-0">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div class="heading_main text_align_center">
                   <h2><span><a href="/news">News &amp; Announcement</a></span></h2>
                </div>
              </div>
        </div>
    </div>
   
    <div class="container">
      <ul class="ul card-4">
        <li class="display-container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
        <li class="display-container">Nunc egestas quam ac massa egestas, ut tincidunt libero pellentesque. </li>
        <li class="display-container">Proin id lacus pulvinar, eleifend lorem ac, efficitur tellus. </li>
        <li class="display-container">Mauris et justo nec elit bibendum scelerisque id sit amet sapien.</li>
        <li class="display-container">Proin interdum dui vitae laoreet convallis. </li>
        <li class="display-container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
      </ul>
    </div>

</div>
</div>
<!-- end section -->
<!-- section -->
<div class="section layout_padding padding_bottom-0">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div class="heading_main text_align_center">
                   <h2><span><a href="/gallery">Gallery</a></span></h2>
                </div>
              </div>
        </div>
    </div>
    <div class="row">

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                class="img-fluid">
            </a>
        </figure>

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
                class="img-fluid" />
            </a>
        </figure>

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
                class="img-fluid" />
            </a>
        </figure>

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg"
                class="img-fluid" />
            </a>
        </figure>

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg"
                class="img-fluid" />
            </a>
        </figure>

        <figure class="col-md-4">
            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
                class="img-fluid" />
            </a>
        </figure>
    </div>
</div>            
</div>
<!-- end section -->

@endsection
@section('script')
@endsection