@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>Contact Us</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->

<!-- section -->
@if (count($errors) > 0)
<div class="section layout_padding_top contact_section" style="background:#f6f6f6;">
  <div class="container">
    <ul class="alert alert-danger">
    @foreach ($errors->all() as $err)
        <li>{{ $err }} </li>
    @endforeach
    </ul>
  </div>
</div>
@endif


@if (session()->has('message'))
  <div class="section layout_padding_top contact_section" style="background:#f6f6f6;">
    <div class="container">
      <p class="alert alert-success justify-content-center">{{ session('message') }} </p>
    </div>
  </div>
@endif
<!-- end section -->

<!-- section -->
<div class="section layout_padding contact_section" style="background:#f6f6f6;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="full float-right_img">
          <img src="/storage/images/img10.png" alt="#">
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="contact_form">
          <form action="contact" method="post">
          {{csrf_field()}}
            <fieldset>
              <div class="full field">
                <input type="text" name="name" placeholder="Your Name" name="your name" value="{{ old('name') }}"/>
              </div>
              <div class="full field">
                <input type="email" name="email" placeholder="Email Address" name="Email" value="{{ old('email') }}"/>
              </div>
              <div class="full field">
                <input type="phn" name="phone_number" placeholder="Phone Number" name="Phone number" value="{{ old('phone_number') }}"/>
              </div>
              <div class="full field">
                <textarea name="message" placeholder="Massage">{{ old('message') }}</textarea>
              </div>
              <div class="full field">
                <div class="center"><button type="submit">Send</button></div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>       
  </div>
</div>
<!-- end section -->
@endsection
@section('script')
@endsection