@extends('view')
@section('main-body-id', 'inner_page')
@section('style')

@endsection
@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>{{$news->title}}</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->
<div class="section layout_padding_2">
<div class="container">
  <div><?=$news->content?></div>
</div>
</div>
@endsection
