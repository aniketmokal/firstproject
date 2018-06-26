<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:logout.php");
	}
	require_once 'header.php';
?>

<div class="content-wrapper">
    	<div class="container-fluid">
    		<h1 class="text-center">Password page</h1>
    		<div class="card card-register mx-auto mt-5">
      <div class="card-header">Password Update</div>
      <div class="card-body">
        <form id="password_form">
          <div class="form-group">
            <div class="form-row">
                            
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Current Password</label>
                <input class="form-control passdata" id="exampleInputPassword1" placeholder="Password" type="password" name="cpass">
              </div>
              <div class="col-md-12">
                <label for="exampleInputPassword1">New Password</label>
                <input class="form-control passdata" id="exampleInputPassword1" placeholder="Password" type="password" name="npass">
              </div>
              <div class="col-md-12">
                <label for="exampleInputPassword1">Confirm New Password</label>
                <input class="form-control passdata" id="exampleInputPassword1" placeholder="Password" type="password" name="cnpass">
              </div>
              
            </div>
          </div>
          <button type="button" class="btn btn-primary btn-block btn_password" >Update</button>
        </form>
        <div class="errordiv">
          
        </div>
      </div>
    </div>
    	</div>
    </div>

<?php
	require_once 'footer.php';
?>