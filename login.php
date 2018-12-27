<?php 
include_once('header.php');
include_once('link.php');
?>


<div id="login-form">
<h1>User Login</h1>
    <form id="l-form"  action="login_code.php" method="POST" >
    <div class="form-group">
    <label class="control-label col-sm-2" >Email:</label>
    <div class="col-sm-6"> 
      <input type="email" name="email" class="form-control"  placeholder="Enter Email Address">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  
  
       
       
    </form>
</div>
