@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
/* The banner image */
.banner-image {
	/* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
	background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/images/banner_img.png");

	/* Set a specific height */
	padding-bottom: 40%;

	/* Position and center the image to scale nicely on all screens */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
    height: 0;

}

/* Place text in the middle of the image */
.banner-text {
 	text-align: center;
 	position: absolute;
 	top: 50%;
 	left: 50%;
 	transform: translate(-50%, -50%);

}
.banner-text > h1 {
  	color: #fff;
    font-size: 2em;
    font-weight: bold;
    width: 100%;
    padding: 10px;
}
@media only screen and (min-width: 600px) {
 	.banner-text > h1 {
	    font-size: 4em;
	}

}
.course-info {
	font-size: 1.2rem;
	padding: 20px;
}
.tc {
	text-align: center;
}
</style>
@endsection

@section('content')
<!-- section -->
<div>
	<div class="banner-image">
		<div class="banner-text">
		    <h1>Mechanical Engineering</h1>
		</div>
	</div>
</div>

<div class="container-fluid course-info row">
	<div class="col-12 col-md-6 tc"><span><i class="fa fa-clock" aria-hidden="true"></i> Duration : </span>2 Years</div>
	<div class="col-12 col-md-6 tc"><span><i class="fa fa-users" aria-hidden="true"></i> Seating Capacity/Unit : </span>42</div>

</div>

<div class="padding_left_right">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec nibh quis est interdum tristique et sed urna. Integer rutrum lobortis congue. Etiam commodo mi imperdiet mauris hendrerit sollicitudin. Quisque ornare suscipit tortor id hendrerit. Sed suscipit elementum enim, eu bibendum elit venenatis non. Cras iaculis, augue id cursus fermentum, nibh mi finibus erat, eu pharetra sem purus quis metus. Nulla in nisl ut nunc congue venenatis et sed leo.</p>

	<p>Vestibulum massa odio, tempor aliquam vehicula non, vestibulum et diam. Curabitur a nulla vehicula, sodales lorem a, aliquet augue. Morbi libero est, rhoncus et massa sit amet, sodales imperdiet sapien. Aenean ultrices elit nec nulla ultrices sagittis. Sed in ornare eros. Duis sapien tortor, lacinia vel metus at, viverra imperdiet odio. Sed sollicitudin odio et eros rutrum laoreet. Vivamus pharetra viverra venenatis. Morbi lacus felis, molestie at quam semper, cursus efficitur quam. Praesent a risus sit amet felis scelerisque pellentesque. Vestibulum quis libero risus. Proin fermentum venenatis est, a consequat tortor hendrerit quis. Donec interdum vehicula mauris, nec aliquam diam ullamcorper vel.</p>
</div>

<!-- end section -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div class="heading_main text_align_center">
                   <h2>Other Courses</h2>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
               <img class="img-responsive" src="/storage/images/p1.png" alt="#" /> 
               <h4>Mechanical Engineering</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p2.png" alt="#" />
                <h4>EC</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="full blog_img_popular">
                <img class="img-responsive" src="/storage/images/p3.png" alt="#" />
                <h4>Civil Engineering</h4>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection