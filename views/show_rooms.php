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
        <li class="breadcrumb-item">
          <a href="show_branches.php">Branch</a>
        </li>
        <li class="breadcrumb-item active">Rooms</li>
      </ol>

      <div class="row">
      <?php
      $brid = $_GET['id'];
      echo $brid;
      ?>


  </div>
      
      <!-- Example DataTables Card-->
     
    </div>
    
    
    <!-- Bootstrap core JavaScript-->
   <?php 
   require_once ('footer.php');
    ?>