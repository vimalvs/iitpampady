@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>

</style>
@endsection

@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>Courses</h3>
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
    @foreach ($courses as $course)
      <div class="col-md-4">
          <div class="full blog_img_popular">
             <a href="/courses/{{$course->pathname}}">
              <img class="img-responsive" src="/storage/images/course/{{ $course->thumbnail }}" alt="{{$course->name}}" > 
              <h4>{{$course->name}}</h4>
            </a>
          </div>
      </div>
    @endforeach
  </div>   
</div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection