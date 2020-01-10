<form action="/postlogin" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>