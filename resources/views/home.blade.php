@extends('view')
@section('main-body-id', 'home')
@section('style')
<style>
div.notification {
  width:100%;
  background-color: #2F5168;
  margin: 2.5em auto;
  border: 2px solid gray;
  padding: 1.5rem;
}
.notification > p {
    color: #E4F6F8;
}
.item-block {
    margin-bottom: 1em;
}
.news-wrapper {
    height: 40px;
}
@media only screen and (min-width: 600px) {
  .notification > p {
    font-size: 20px;
  }
}
</style>
@endsection
@section('content')
@if ($arBannerImage)
<div class="container-fluid">
    <div class="row">
        <div class="pogoSlider" id="js-main-slider">
            @foreach($arBannerImage as $image)
                <div class="pogoSlider-slide" style="background-image:url(storage/images/banner/{{$image['pathname']}});"></div>
            @endforeach
        </div>
        <!-- .pogoSlider -->
    </div>
</div>
@endif
<!-- End Banner -->

@if ($flashNews)
<div class="section">
<div class="notification no-margin">
    <p>{{$flashNews}}</p>
</div>  
</div>
@endif
<!-- section -->
<div class="section">
<div class="container">
     <div class="heading_main text_align_left layout_padding_2"><h2 class="no-margin"><span> Mathews Mar Ivanios Private Industrial Training Institute</span></h2></div>
    <div class="layout_padding_2 padding_bottom-0">
        <h3 class="h3">Vision</h3>
        <p>The founder of MMI ITI had a vision that it should be a center of excellence. He envisioned a skilled and technically educated workforce. Through this he dreamed a prosperous and self-employed state. In order to make this possible he built a 24000 sq feet three story building with full-fledged laboratory. Even after his dimes his followers uphold his vision continuously work for developing new horizons in this fast-developing era.</p>
    </div> 
    <div class="layout_padding_2">
        <h3 class="h3">Mission</h3>
        <p >We know that the prosperity of the grassroot of the community is based on the labour class. So that we are determined to impart to the modern youth the technical trade knowledge and employability skills with dedication and commitment to enable them to make a positive difference in the world with their unique civic behavior. As a committed institute to the society we offer many merit based as well as philanthropical scholarships for qualified trainees.</p>
    </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section">
<div class="container">
    <div class="layout_padding_2 padding_bottom-0">
        <h3 class="h3">Hostel</h3>
        <p>Hostel facility for the boys trainees from distant places are available.</p>
    </div> 
    <div class="row img-wrapper">
        <div class="col-12 col-md-6 tc"><img src="/storage/imgs/hostel.jpeg" height="275" width="400" alt="hostel" ></div>
        <div class="col-12 col-md-6 tc"><img src="/storage/imgs/college-hostel.jpeg" height="275" width="400" alt="hostel" ></div>
    </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section">
<div class="container">
    <div class="layout_padding_2 padding_bottom-0">
        <h3 class="h3">College Bus</h3>
    </div> 
    <div class="row img-wrapper">
        <div class="col-12 col-md-6 tc"><img src="/storage/imgs/bus.jpeg" height="275" width="400" alt="college-bus" ></div>
        <div class="col-12 col-md-6 tc"><img src="/storage/imgs/college-bus.jpeg" height="275" width="400" alt="college-bus" ></div>
    </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section">
<div class="container">
    <div class="layout_padding_2 padding_bottom-0">
        <h3 class="h3">College Ground</h3>
    </div> 
    <div class="row img-wrapper">
        <div class="col-12 col-md-6 tc"><img src="/storage/imgs/ground.jpeg" height="275" width="400" alt="college-bus" ></div>
    </div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section layout_padding padding_bottom-0">
<div class="container">
    <div id="map"></div>
</div>
</div>
<!-- end section -->
@endsection
@section('script')

<script>
function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(9.555789, 76.632403),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("map"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAziyUNCmUw_LX5r81wv60B3j8xxW0ePrw&callback=myMap"></script>

@endsection