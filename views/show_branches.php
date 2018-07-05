<?php
	require_once ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Hotels</a>
        </li>
        <li class="breadcrumb-item active">Branches</li>
      </ol>

      <div class="row">
      <?php
      $hid = $_GET['id'];
      // echo $hid;
      $result = $obj->get_branch_hotelwise($hid);
      // pre($result);
      if(is_array($result)):
      	foreach($result as $val):
      ?>

      <div class="card col-md-4" style="width: 18rem;">
        
        <div class="card-body">
          <h5 class="card-title"><?php echo $val['br_name'];?></h5>
         	<a href="show_rooms.php?id=<?php echo $val['br_id'];?>" class="btn btn-primary">Click</a>
          
        
        </div>
      </div>

      <?php
  endforeach;
endif;
      ?>


  </div>
      
      <!-- Example DataTables Card-->
     
    </div>
    
    
    <!-- Bootstrap core JavaScript-->
   <?php 
   require_once ('footer.php');
    ?>