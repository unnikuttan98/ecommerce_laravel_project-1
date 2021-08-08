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
<table class="table table-striped">
  
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
  @csrf
  <div class="form-group">
    <textarea name="address" placeholder='enter your address' class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Payment on delivery</span>

  </div>

  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div>
</div>
</div>