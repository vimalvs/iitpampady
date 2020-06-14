@extends('view')
@section('main-body-id', 'inner_page')
@section('style')
@section('style')
<style>
.table {
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #002147;
  color: white;
}
.padding_top {
  padding-top: 20px;
}
.posted-date {
  display: block;
  text-align: right;
  font-size: 12px;
  font-style: italic;
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
                 <h3>News &amp; Announcements </h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->
<div class="section padding_top">
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>
          Notifications
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <a href="/storage/documents/test.pdf">Branch/Department/Fee category change for 2019 admissions students</a>
          <span class="posted-date">Posted Date: 2020 June, 12</span>
        </td>
      </tr>
      <tr>
        <td>
          <a href="/storage/documents/test.pdf">Branch/Department/Fee category change for 2019 admissions students</a>
          <span class="posted-date">Posted Date: 2020 June, 12</span>
        </td>
      </tr>
      <tr>
        <td>
          <a href="/storage/documents/test.pdf">Branch/Department/Fee category change for 2019 admissions students</a>
          <span class="posted-date">Posted Date: 2020 June, 12</span>
        </td>
      </tr>
      <tr>
        <td>
          <a href="/storage/documents/test.pdf">Branch/Department/Fee category change for 2019 admissions students</a>
          <span class="posted-date">Posted Date: 2020 June, 12</span>
        </td>
      </tr>
      <tr>
        <td>
          <a href="/storage/documents/test.pdf">Branch/Department/Fee category change for 2019 admissions students</a>
          <span class="posted-date">Posted Date: 2020 June, 12</span>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>

@endsection
@section('script')
@endsection