@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  height: 100%;
}
.img-wrapper {
  height: 75%;
  overflow: hidden;
}
.title {
  color: grey;
  font-size: 18px;
  text-align: center;
}

.tc{
  text-align: center;
}
.pad {
  padding: 1rem;
}
.head {
    font-size: 20px;
    padding: 24px 0;
    font-weight: bold;
    text-decoration: underline;
}
.no-margin {
  margin:0 !important;
}
.no-pad{
  padding: 0 !important;
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
                 <h3 >About us</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->
<!-- section -->
<div class="section margin-top_10">
    <div class="container">
      <div class="full layout_padding_2">
          <div class="heading_main text_align_left">
             <h2 class="no-margin"><span>Welcome To</span> Mathews Mar Ivanios Private Industrial Training Institute</h2>
          </div>
          <div class="full">
            <?=$content->content?>
          </div>
      </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section layout_padding">
<div class="container">
  <h3 class="head">Mathews Mar Ivanios Private ITI Managing Board.</h3>
  <div class="row">
    @if(isset($committee['Manager']))
    <div class="col-12 col-md-3">
      <div class="card">
        <div class="img-wrapper">
          <img src="/storage/images/committee/{{$committee['Manager'][0]->image}}" alt="{{$committee['Manager'][0]->name}}" style="width:100%">
        </div>
        <h6 class="tc pad">{{$committee['Manager'][0]->name}}</h6>
        <p class="title">Manager</p>
      </div>
    </div>  
    @endif
    @if(isset($committee['Secretary']))
    <div class="col-12 col-md-3">
      <div class="card">
        <div class="img-wrapper">
          <img src="/storage/images/committee/{{$committee['Secretary'][0]->image}}" alt="{{$committee['Secretary'][0]->name}}" style="width:100%">
        </div>
        <h6 class="tc pad">{{$committee['Secretary'][0]->name}}</h6>
        <p class="title">Secretary</p>
      </div>
    </div>  
    @endif
    @if(isset($committee['Principal']))
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="img-wrapper">
            <img src="/storage/images/committee/{{$committee['Principal'][0]->image}}" alt="{{$committee['Principal'][0]->name}}" style="width:100%">
          </div>
          <h6 class="tc pad">{{$committee['Principal'][0]->name}}</h6>
          <p class="title">Principal</p>
        </div>
      </div>  
    @endif
    </div>
    @if(isset($committee['Trustee']))
      <h3 class="head">Trustees</h3>
      <div class="row">
        @foreach ($committee['Trustee'] as $trustee)
        <div class="col-12 col-md-3">
          <div class="card">
            <div class="img-wrapper">
              <img src="/storage/images/committee/{{$trustee->image}}" alt="{{$trustee->name}}" style="width:100%">
            </div>
            <h6 class="tc pad">{{$trustee->name}}</h6>
          </div>
        </div>  
        @endforeach
      </div>
    @endif

    @if(isset($committee['Board Member']))
      <h3 class="head">Board Members</h3>
      <div class="row">
        @foreach ($committee['Board Member'] as $member)
        <div class="col-12 col-md-2">
          <div class="card">
            <div class="img-wrapper">
              <img src="/storage/images/committee/{{$member->image}}" alt="{{$member->name}}" style="width:100%">
            </div>
            <h6 class="tc pad">{{$member->name}}</h6>
          </div>
        </div>  
        @endforeach
      </div>
    @endif
</div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection