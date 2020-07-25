@extends('view')
@section('main-body-id', 'inner_page')
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
.block{
  display: block;
  width: 100%;
  height: 100%;
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
      @foreach($arNews as $news)
      <tr>
        <td>
          @if ($news->pdf_url)
          <a class="block" href="/storage/pdf/news/{{$news->pdf_url}}">{{$news->title}} <span class="posted-date">Posted Date: {{date($news->created_at)}}</span></a>
          
          @else
          <a class="block" href="/news/{{$news->id}}">{{$news->title}} <span class="posted-date">Posted Date: {{date($news->created_at)}}</span></a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
