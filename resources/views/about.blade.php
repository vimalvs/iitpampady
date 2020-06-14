@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
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
</style>
@endsection

@section('content')
<!-- section -->
    
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3 class="head">About us</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->
<!-- section -->
<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <h2><span>Welcome To</span> Mathews Mar Ivanios Private Industrial Training Institute</h2>
                    </div>
                    <div class="full">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
  <h3 class="head">Mathews Mar Ivanios Private ITI Managing Board - 2020.</h3>
  <div class="row">
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
        <p class="title">Manager</p>
      </div>
    </div>  
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
        <p class="title">Secretary</p>
      </div>
    </div> 
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
        <p class="title">Principal</p>
      </div>
    </div> 
  </div>
  <h3 class="head">Trustees</h3>
  <div class="row">
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
      </div>
    </div>  
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
      </div>
    </div> 
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
      </div>
    </div> 
  </div>
  <h3 class="head">Board Members</h3>
  <div class="row">
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
      </div>
    </div>  
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
      </div>
    </div> 
    <div class="col-6 col-md-4">
      <div class="card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
        <h1 class="tc pad">John Doe</h1 class="tc pad">
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
                   <h2><a href="/courses">Courses</a></h2>
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
@endsection
@section('script')
@endsection