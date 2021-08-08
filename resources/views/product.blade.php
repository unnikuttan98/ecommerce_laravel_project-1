@include('home')
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
      @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
    <a href="detail/{{$item['id']}}">
    <img src="{{$item['gallery']}}" alt="Los Angeles">
     <div class="carousal-caption">
           <h3>{{$item['name']}}</h3>
           <p>{{$item['description']}}</p>
</div>
    </a>
    </div>@endforeach 
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="panel">panel
</div>
<style>
    .custom-product{
        height:600px;
    }
    .carousal-caption{
        background-color:lightgreen;
    }
    .trending-image{
        height:100px;
    }
    .trending-item{
        float :left;
        width:20%;
    }
    .Trending-wrapper{
        margin:30px;
    }
    </style>
    <div class="Trending-wrapper">
        <h3>Products list</h3>@foreach($products as $item)
        <div class="trending-item">
        <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
     <div class="">
           <h3>{{$item['name']}}</h3>
</div></a>
    </div>@endforeach
  </div>
</div>