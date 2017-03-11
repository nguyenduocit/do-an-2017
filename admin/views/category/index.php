<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once("../../teamplate/head.php"); ?>
 </head>

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php require_once("../../teamplate/sidebar.php"); ?>
        <!-- top navigation -->
        <?php require_once("../../teamplate/top.php"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        
            <?php 
      if(isset($_GET['action']))
      {
        $action = $_GET['action'];
        switch ($action) {
          case 'add':
            # code...
            include_once("add.php");
            break;

          case 'edit':
            # code...
            include_once("edit.php");
            break;
          
          default:
            # code...
            include_once("view.php");
            break;
        }
      }else
      {
        include_once("view.php");
      }
    ?>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <?php require_once("../../teamplate/footer.php"); ?>
           
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php require_once("../../teamplate/link_jquery.php"); ?>
  </body>
</html>