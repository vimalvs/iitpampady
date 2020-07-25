@extends('view')
@section('main-body-id', 'home')

@section('content')
@if ($arBannerImage)
<div class="container-fluid">
    <div class="row">
        <div class="pogoSlider" id="js-main-slider">
            @foreach($arBannerImage as $image)
                <div class="pogoSlider-slide" style="background-image:url(/storage/images/banner/{{$image->pathname}});"></div>
            @endforeach
        </div>
        <!-- .pogoSlider -->
    </div>
</div>
@endif
<!-- End Banner -->
<!-- section -->
<div class="section">
<div class="container">
    <div class="layout_padding_2"><?=$course->description?></div>
</div>
</div>
<!-- end section -->


@endsection
