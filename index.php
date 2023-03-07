
<!doctype html>
<html lang="en">

<?php 
include 'libs/load.php';
$result=true;
if(logincheck::loggedin()){
  $result=false;
}
if(!$result){

load_template("head");?>
<body>
 

 
  <header>
    <?php
      load_template("header");
	?>
  </header>
  
  <main>


    <?php 
    
    load_template("main_heading");
 ?>


  </main>

    <?php load_template("footer");
 ?>
  </footer>


  <script src="/studinfo/assets/dist/js/bootstrap.bundle.min.js"></script>
  


</body>

</html>
<?php
}
else{

  header('location:/studinfo/login.php');
}
?>