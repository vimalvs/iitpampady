@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
th {
  text-align: left;
  padding: 10px;
}
td {
  text-align: left;
  padding: 4px 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #002147;
  color: white;
}
td p, th p {
  margin: 0;
  padding: 0;
}
.company-wrapper {
  background: #ced4da;
}
.company-logo {
    padding: 10px 0;
}
.company-logo img{
  width:100%;
}
.company-logo span{
    display: inline-block;
    height: 55px;
    margin-left: 15px;
    margin-right: 15px;
    text-align: center;
    vertical-align: middle;
    width: 55px;
    border-radius: 50%;
    overflow: hidden;
    padding-top: 0%;
    border: 2px solid #fff;
    background-color: #fff;
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
                 <h3>Placement</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->

<!-- section -->
<div class="section layout_padding_2">
<div class="container">
  <div><?=$content->content?></div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="section layout_padding_2">
<div class="container">
  <h2>Our Placements</h2>
  <div class="row company-wrapper">
    @foreach($arCompany as $company)
      <div class="company-logo">
        <span><img src="/storage/images/company/{{$company->logo}}"></span>
      </div>
    @endforeach
  </div>
</div>
</div>
<!-- end section -->
@endsection
