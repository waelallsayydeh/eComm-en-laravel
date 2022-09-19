@extends('master')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="custom-product">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner ">

        @foreach ($Products as $item)
        <a href="detail/{{ $item['id']}}">
        <div class="item {{$item['id']==1?'active':''}}">
            <img class="slider-img" src="{{ $item['gallery'] }}" >
            <div class="carousel-caption slider-text">
                <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['description'] }}</p>
            </div>
        </a>
        </div>
        @endforeach
    </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>


    <div class="trending-wrapper">
    <h3>Trending-wrapper</h3>
    @foreach ($Products as $item)
    <a href="detail/{{ $item['id']}}">
    <div class="trending-item">
        <img class="trending-image" src="{{ $item['gallery']}}" >
        <div class="">
            <h3>{{ $item['name'] }}</h3>
        </div>
    </a>
    </div>
    @endforeach


    </div>
</div>
</body>
</html>

@endsection












<!--     <div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          Indicators
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
  Wrapper for slides
        <div class="carousel-inner">
             @foreach ($Products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <img class="slider-img" src="{{ $item['gallery'] }}" >
                <div class="carousel-caption slider-text">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
  Left and right controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
-->
