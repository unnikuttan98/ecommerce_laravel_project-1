@include('home')

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
    .cart-list-devider{
        border-bottom:2px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
    }
    </style>
    <div class="custom-product">
<div class="col-sm-10">
    <div class="Trending-wrapper">
        <h3>Result for Products</h3>
        <a class="btn btn-success" href="ordernow">Order now</a><br><br>
        @foreach($products as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
     </a>
</div>
<div class="col-sm-4">    
     <div class="">
           <h3>{{$item->name}}</h3>
           <p>{{$item->description}}</p>
</div>
</div>
<div class="col-sm-3">
     <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove to cart</a>
</div>
    </div>@endforeach
    <a class="btn btn-success" href="ordernow">Order now</a><br><br>
  </div>
</div>
</div>