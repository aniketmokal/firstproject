<?php 
  session_start();
  // print_r($_SESSION);
  // exit;
  if(!isset($_SESSION['username'])){
    header("location:logout.php");
  }
   if($_SESSION['usertype']!=2){
    header("location:index.php");
  }

	require_once ('header.php');
 ?>
	<div class="content-wrapper">
    	<div class="container-fluid">
    		<h1 class="text-center">Hotel page</h1>
    		<div class="card card-register mx-auto mt-5">
      <div class="card-header">Create Hotel</div>
      <div class="card-body">
        <form id="hotel_form">
          <div class="form-group">
            <div class="form-row">
                            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Hotel Name</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Taj Land" type="text" name="hotel_name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Hotel Photo</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Taj Land" type="file" name="hotel_photo">
          </div>
          
          <button type="button" class="btn btn-primary btn-block btn_hotel" >Add name</button>
        </form>
        <div class="errordiv">
          
        </div>
      </div>
    </div>
    	</div>
    </div>

 <?php 
 require_once ('footer.php');
  ?>