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
        <h3>my orders</h3>       
        @foreach($orders as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
     </a>
</div>
<div class="col-sm-4">    
     <div class="">
           <h3>Name :{{$item->name}}</h3>
           <h6>Delivery Status :{{$item->status}}</h6>
           <h6>Address : {{$item->address}}</h6>
           <h6>Payment Status :{{$item->payment_status}}</h6>
           <h6>payment method :{{$item->payment_method}}</h6>
</div>
</div>

    </div>@endforeach
  </div>
</div>
</div>