<?php
	require_once ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
      <div class="row">
      <?php
      $result = $obj->get_hotels();
      // pre($result);
      if(is_array($result)):
        foreach($result as $value):
      ?>

      <div class="card col-md-4" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $value['ho_photo'];?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $value['ho_name'];?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="show_branches.php?id=<?php echo $value['ho_id'];?>" class="btn btn-primary">Click</a>
        
        </div>
      </div>
      <?php
        endforeach;
      endif;
      ?>
      </div>
      </div>
      <!-- Example DataTables Card-->
     
    </div>
    
    
    <!-- Bootstrap core JavaScript-->
   <?php 
   require_once ('footer.php');
    ?>