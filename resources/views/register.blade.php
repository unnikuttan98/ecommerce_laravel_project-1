@include('home')

<div class="container">
  <h2>Register</h2>
  <form class="form-horizontal" action="register" method="post">
      @csrf
    <div class="form-group">     
      <label class="control-label col-sm-2" for="name">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="user name" name="name">
      </div></div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>
<style>h2{
   background-color:lightyellow;
   color:blue;
   text-align:center;
}
   .container{
       background-color:lightyellow;
       border-bottom:16px solid grey;
       border-top:16px solid grey;
       border-left:4px solid grey;
       border-right:4px solid grey;
   }
   .btn-default{
       color:white;
       background-color:grey;
       text-align:center;
   }
</style></div>