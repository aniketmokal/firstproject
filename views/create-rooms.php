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
    		<h1 class="text-center">Branch page</h1>
    		<div class="card card-register mx-auto mt-5">
      <div class="card-header">Create Room</div>
      <div class="card-body">
        <form id="hotel_room">
          <div class="form-group">
          <div class="form-row">
            <label for="exampleInputEmail1">Select  hotels</label>
            <?php
                $userid = $_SESSION['userid'];
                $result = $obj->get_hotel_userwise($userid);
                // pre($result);
                // exit;
              ?>
            <select class="form-control select_hotel" name="hotelid">

                <option value="">Please Select hotel</option>
                <?php
                if(is_array($result)){
                  foreach($result as $val){
                      $id = $val['ho_id'];
                      echo "<option value='$id'>";
                      echo $val['ho_name'];
                      echo "</option>";
                  }
                }
                ?>
            </select>                
          </div>
           <div class="form-row">
            <label for="exampleInputEmail1">Select  Branch</label>
            <?php
                $userid = $_SESSION['userid'];
                $result = $obj->get_hotel_userwise($userid);
                // pre($result);
                // exit;
              ?>
            <select class="form-control branch_select" name="branchid">

                <option value="">Please Select Branches</option>
               
            </select>                
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Room Name</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="101" type="text" name="room_name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Room Price</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1500" type="text" name="room_price">
          </div>
          
          <button type="button" class="btn btn-primary btn-block btn_room" >Add Room</button>
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